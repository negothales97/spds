<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{City, State, Coupon, Link, ToolsMarketing, ContentMarketing, Student, Furnisher, OccupationArea};

class CompanyController extends Controller
{
    public function show(Request $request)
    {
        $company = auth()->guard('company')->user();
        if($company->status == 0){
            $request->session()->flush();
            return redirect()->route('company.login')->with('warning', 'O seu acesso não consta liberado');
        }
        $company->mensality = convertMoneyUSAtoBrazil($company->mensality);

        return view('company.pages.company.show')->with('company', $company);
    }

    public function edit()
    {
        $company = auth()->guard('company')->user();
        $company->mensality = convertMoneyUSAtoBrazil($company->mensality);

        return view('company.pages.company.edit')
        ->with('states', State::all())
        ->with('cities', City::all())
        ->with('company', $company);
    }

    public function coupons(Request $request)
    {
        $coupons = new Coupon;

        if ($request->has('code')) {
            if (request('code') != '') {
                $coupons = $coupons->where('code', 'like', '%' . request('code') . '%');
            }
        }

        $coupons = $coupons->orderBy('code', 'asc')->paginate(10);
        return view('company.pages.coupon.index')->with('coupons', $coupons);
    }

    public function links(Request $request)
    {
        $links = new Link;

        if ($request->has('title')) {
            if (request('title') != '') {
                $links = $links->where('title', 'like', '%' . request('title') . '%');
            }
        }

        $links = $links->orderBy('title', 'asc')->paginate(10);
        return view('company.pages.link.index')
        ->with('links', $links);
    }

    public function toolsMkt(Request $request)
    {
        $tools = new ToolsMarketing;

        if ($request->has('title')) {
            if (request('title') != '') {
                $tools = $tools->where('title', 'like', '%' . request('title') . '%');
            }
        }

        $tools = $tools->orderBy('title', 'asc')->paginate(10);
        return view('company.pages.tools-marketing.index')
        ->with('tools', $tools);
    }

    public function contentMkt(Request $request)
    {
        $contents = new ContentMarketing;

        if ($request->has('title')) {
            if (request('title') != '') {
                $contents = $contents->where('title', 'like', '%' . request('title') . '%');
            }
        }

        $contents = $contents->orderBy('title', 'asc')->paginate(10);
        return view('company.pages.content-marketing.index')
        ->with('contents', $contents);
    }
    public function searchStudent(Request $request)
    {
        $students = new Student;

        if ($request->has('name')) {
            if (request('name') != '') {
                $students = $students->where('name', 'like', '%' . request('name') . '%');
            }
        }
        if ($request->has('email')) {
            if (request('email') != '') {
                $students = $students->where('email', 'like', '%' . request('email') . '%');
            }
        }
        if ($request->has('occupation_area_id')) {
            if (request('occupation_area_id') != '') {
                $students = $students->where('occupation_area_id', request('occupation_area_id'));
            }
        }
        $students = $students->where('status', 1);

        $students = $students->orderBy('name', 'asc')->paginate(10);
        return view('company.pages.search.student')
        ->with('occupations', OccupationArea::all())
        ->with('students', $students);
    }
    
    public function searchFurnisher(Request $request)
    {
        $furnishers = new Furnisher;

        if ($request->has('name')) {
            if (request('name') != '') {
                $furnishers = $furnishers->where('name', 'like', '%' . request('name') . '%');
            }
        }
        if ($request->has('email')) {
            if (request('email') != '') {
                $furnishers = $furnishers->where('email', 'like', '%' . request('email') . '%');
            }
        }
        if ($request->has('occupation_area_id')) {
            if (request('occupation_area_id') != '') {
                $furnishers = $furnishers->where('occupation_area_id', request('occupation_area_id'));
            }
        }
        $furnishers = $furnishers->where('status', 1);

        $furnishers = $furnishers->orderBy('name', 'asc')->paginate(10);
        return view('company.pages.search.furnisher')
        ->with('occupations', OccupationArea::all())
        ->with('furnishers', $furnishers);
    }

    public function showStudent(Student $student)
    {
        return view('company.pages.search.show-student')
        ->with('student', $student);
    }
    
    public function showFurnisher(Furnisher $furnisher)
    {
        return view('company.pages.search.show-furnisher')
        ->with('furnisher', $furnisher);
    }
    

}
