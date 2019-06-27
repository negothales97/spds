<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{State,Company, City};

class CompanyController extends Controller
{
    public function show(Request $request)
    {
        $companies = new Company;

        if ($request->has('name')) {
            if (request('name') != '') {
                $companies = $companies->where('name', 'like', '%' . request('name') . '%');
            }
        }
        if ($request->has('email')) {
            if (request('email') != '') {
                $companies = $companies->where('email', 'like', '%' . request('email') . '%');
            }
        }

        $companies = $companies->orderBy('name', 'asc')->paginate(10);
        return view('admin.pages.company.index')
        ->with('companies', $companies);
    }

    public function create()
    {
        return view('admin.pages.company.create')
        ->with('states', State::all());
    }

    public function store(Request $request)
    {
        $data = validateCompany($request);
        
        $company = Company::create($data);
        return redirect()
        ->route('admin.company.edit', ['company' => $company])
        ->with('success', "Empresa Incluída");
    }

    public function edit(Company $company)
    {
        $company->mensality = convertMoneyUSAtoBrazil($company->mensality);
        return view('admin.pages.company.edit')
        ->with('states', State::all())
        ->with('cities', City::all())
        ->with('company', $company);
        
    }

    public function statusValidate(Company $company)
    {
        $company->status == 0 ? $company->status = 1 : $company->status = 0;
        $company->save();
        return redirect()->back()->with('info','Status Alterado');
    }

    public function update(Request $request)
    {
        $data = validateCompany($request);
        Company::find($request->company_id)->update($data);

        return redirect()->back()->with('success', "Empresa Editada");
    }

    public function delete(Company $company)
    {
        $company->delete();
        return redirect()->back()->with('info', 'Empresa Removida');
    }
}
