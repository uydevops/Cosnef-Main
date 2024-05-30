<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompaniesController extends Controller
{
    
    public function CompaniesAdd()
    {
        return view('dashboard.companies.add');
    }

    // Ortak işlemleri gerçekleştiren bir fonksiyon
    private function processCompanyData(Request $request)
    {
        $data = $request->only([
            'customer_group_name', 'name', 'company', 
            'phone', 'email', 'country', 
            'city', 'state', 'address'
        ]);
        $data['phone2'] = $request->phone2 ?: '0';

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images'), $logoName);
            $data['logo'] = $logoName;
        }

        return $data;
    }

    public function updateCompany(Request $request)
    {
        $company = Companies::find($request->id);
        if (!$company) {
            return redirect()->back()->with('error', 'Company not found.');
        }

        $data = $this->processCompanyData($request);
        $company->update($data);

        return redirect()->back()->with('success', 'Şirket başarıyla güncellendi');
    }

    public function CompanyDelete($id)
    {
        $company = Companies::find($id);
        $company->delete();
        return redirect()->back()->with('success', 'Şirket başarıyla silindi');
    }


    public function addCompany(Request $request)
    {
        $data = $this->processCompanyData($request);
        Companies::create($data);

        return redirect()->back()->with('success', 'Şirket başarıyla eklendi');
    }

}
