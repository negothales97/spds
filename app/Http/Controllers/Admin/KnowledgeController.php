<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KnowledgeStudent;

class KnowledgeController extends Controller
{
    public function store(Request $request)
    {
        $data = validateKnowledge($request);
        KnowledgeStudent::create($data);
        return redirect()->back()->with('success', 'Conhecimento de informática incluído');

    }

    public function update(Request $request)
    {
        $data = validateKnowledge($request);
        KnowledgeStudent::find($request->know_id)->update($data);
        return redirect()->back()->with('success', 'Conhecimento de informática editado');
        
    }

    public function delete(KnowledgeStudent $knowledge)
    {
        $knowledge->delete();
        return redirect()->back()->with('info', 'Conhecimento de informática removido');
    }
}
