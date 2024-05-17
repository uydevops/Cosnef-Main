<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products as Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{


    public function garbage_collection()
    {
        $imageFolderFiles = File::files(public_path('images'));
        $tables = DB::select('SELECT table_name FROM information_schema.columns WHERE column_name = ? AND table_schema = ?', ['image', env('DB_DATABASE')]);
    
        $dbImageFiles = [];
        foreach ($tables as $table) {
            $tableName = $table->table_name;
            $imageData = DB::table($tableName)->pluck('image')->toArray();
            $dbImageFiles = array_merge($dbImageFiles, $imageData);
        }
        foreach ($imageFolderFiles as $file) {
            $fileName = pathinfo($file, PATHINFO_BASENAME); 
            if (!in_array($fileName, $dbImageFiles)) {
                File::delete($file);
            }
        }
    }

    public function updateProduct(Request $request)
    {
        $product = Product::findOrFail($request->input('id'));

        if ($request->hasFile('image')) {
            $this->deleteProductImage($product->image);
            $imagePath = $this->uploadImage($request->file('image'));
            $product->image = $imagePath;
        }

        $product->fill($this->getProductData($request));
        $product->save();

        return redirect()->back()->with('success', 'Ürün Güncellendi');
    }

    public function addProduct(Request $request)
    {
        $data = $this->getProductData($request);

        if ($request->hasFile('image')) {
            $imagePath = $this->uploadImage($request->file('image'));
            $data['image'] = $imagePath;
        }

        Product::create($data);

        return redirect()->back()->with('success', 'Ürün Eklendi');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $this->deleteProductImage($product->image);
        $product->delete();

        return redirect()->back()->with('success', 'Ürün başarıyla silindi');
    }

    //Refactor edilebilir bir fonksiyon 
    private function uploadImage($image)
    {
        // $imageName'i oluşturalım
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Hedef klasörü belirleyelim
        $destinationPath = public_path('images');

        // Eğer klasör yoksa, oluşturulmasını sağlayalım
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        // Resmi hedef klasöre taşıyalım
        $image->move($destinationPath, $imageName);

        // Dosya yolunu döndürelim
        return $imageName;
    }



    private function deleteProductImage($imageName)
    {
        $imagePath = 'public/images/' . $imageName;
        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
        }
    }

    public function bonusUpgrade(Request $request)
    {
        $product = Product::findOrFail($request->input('id'));
        $product->bonus = $request->input('bonus');
        $product->save();

        return redirect()->back()->with('success', 'Bonus Güncellendi');
    }

    private function getProductData(Request $request)
    {
        return [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'product_details' => $request->input('product_description'),
            'type_id' => $request->input('type_id'),
            'active' => $request->has('active') ? 1 : 0,
            'aciklama' => $request->input('aciklama'),
            'unit' => $request->input('unit'),
            'category_id' => $request->input('category_id') ?? 0,
            'code' => $request->input('code') ?? 0,
        ];
    }
}
