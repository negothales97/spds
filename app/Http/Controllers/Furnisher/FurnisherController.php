<?php

namespace App\Http\Controllers\Furnisher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OccupationArea;

class FurnisherController extends Controller
{
    public function show(Request $request)
    {
        $furnisher = auth()->guard('furnisher')->user();
        if($furnisher->status == 0){
            $request->session()->flush();
            return redirect()->route('furnisher.login')->with('warning', 'O seu acesso não consta liberado');
        }
        return view('furnisher.pages.furnisher.show')->with('furnisher', $furnisher);
    }

    public function edit()
    {
        $furnisher = auth()->guard('furnisher')->user();
        return view('furnisher.pages.furnisher.edit')
        ->with('furnisher', $furnisher)
        ->with('occupations', OccupationArea::all());
    }
}
