<?php

namespace App\Http\Controllers\Furnisher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OccupationArea;

class FurnisherController extends Controller
{
    public function show()
    {
        $furnisher = auth()->guard('furnisher')->user();
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
