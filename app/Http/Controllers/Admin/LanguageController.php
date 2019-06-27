<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LanguageStudent;

class LanguageController extends Controller
{
    public function store(Request $request)
    {
        $data = validateLanguage($request);
        LanguageStudent::create($data);
        return redirect()->back()->with('success', 'Idioma incluído');

    }

    public function update(Request $request)
    {
        $data = validateLanguage($request);
        LanguageStudent::find($request->lang_id)->update($data);
        return redirect()->back()->with('success', 'Idioma editado');
        
    }

    public function delete(LanguageStudent $language)
    {
        $language->delete();
        return redirect()->back()->with('info', 'Idioma removido');
    }
}
