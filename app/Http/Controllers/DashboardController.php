<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\UrunTakip;
use App\Models\Companies;
use App\Models\ProductTypes;
use App\Models\Tasks;
use App\Models\ProductsUnit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; //Bunu ekleme sebebimiz, logout işlemi yapabilmek için
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; //Bunu ekleme sebebimiz, controller içerisinde authorize işlemleri yapabilmek için
use Illuminate\Routing\Controller as BaseController;
use App\Models\CustomerGroups;
use Illuminate\Support\Facades\Cache;

class DashboardController extends BaseController
{
    use AuthorizesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $userId = auth()->user()->id;

        $this->data = [
            'tasks' => Tasks::where('user_id', $userId)->get(),
            'completedTasksCount' => Tasks::where('user_id', $userId)->where('completed', 1)->count(),
            'productCount' => Products::count(),
            'activeCompaniesCount' => Companies::count(),
            'companiesRegInfo' => Companies::select('name', 'company', 'bonus_kotasi')->where('onay', 1)->get(),
            'pendingCompanies' => Companies::where('onay', 0)->get()
        ];

        return view('dashboard.index', $this->data);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    // AJAX ile task ekleme
    public function addTask(Request $request)
    {
        $task = new Tasks();
        $task->description = $request->input('description');
        $task->user_id = auth()->user()->id;
        $task->save();

        return response()->json(['message' => 'Görev başarıyla eklendi'], 200);
    }

    public function deleteTask(Request $request)
    {
        $task = Tasks::find($request->input('task_id'));
        if ($task) {
            $task->delete();
            return response()->json(['message' => 'Görev başarıyla silindi'], 200);
        }
        return response()->json(['message' => 'Görev bulunamadı'], 404);
    }

    public function checkTask(Request $request)
    {
        $task = Tasks::find($request->input('task_id'));
        if ($task) {
            $task->completed = !$task->completed;
            $task->save();
            return response()->json(['message' => 'Görev başarıyla güncellendi'], 200);
        }
        return response()->json(['message' => 'Görev bulunamadı'], 404);
    }

    public function completedTasks()
    {
        $completedTasks = Tasks::where('user_id', auth()->user()->id)->where('completed', 1)->get();
        return response()->json($completedTasks);
    }

    public function approvedCompanies($id)
    {
        $company = Companies::find($id);
        if ($company) {
            $company->onay = 1;
            $company->save();
            return redirect()->back();
        }
        return redirect()->back()->withErrors(['message' => 'Şirket bulunamadı']);
    }

    public function rejectedCompany($id)
    {
        $company = Companies::find($id);
        if ($company) {
            $company->delete();
            return redirect()->back();
        }
        return redirect()->back()->withErrors(['message' => 'Şirket bulunamadı']);
    }

    public function users()
    {
        $this->data['users'] = User::all();
        return view('dashboard.users', $this->data);
    }


    public function companies()
    {
        $this->data['companies'] = Companies::where('onay', 1)->get();
        $this->data['groups'] = CustomerGroups::all();

        return view('dashboard.companies', $this->data);
    }

    public function products()
    {
        $productsCacheKey = 'products.all';
        $productTypesCacheKey = 'product_types.all';
        $productsUnitCacheKey = 'units.all';
    
        // Ürünler
        $products = Cache::remember($productsCacheKey, 60, function () {
            return Products::withCount('urunTakips')->orderByDesc('id')->get();
        });
    
        $productTypes = Cache::remember($productTypesCacheKey, 60, function () {
            return ProductTypes::all();
        });
        $productsUnit = Cache::remember($productsUnitCacheKey, 60, function () {
            return ProductsUnit::all();
        });
    
        return view('dashboard.products', [
            'products' => $products,
            'product_types' => $productTypes,
            'products_unit' => $productsUnit,
        ]);
    }

    public function clearProductsCache()
    {
        Cache::forget('products.all');
        Cache::forget('product_types.all');
        return redirect()->route('dashboard.products')->with('status', 'Ürünler cache\'den temizlendi');
    }
}
