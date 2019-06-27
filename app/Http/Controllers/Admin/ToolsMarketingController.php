<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ToolsMarketing;

class ToolsMarketingController extends Controller
{
    public function show(Request $request)
    {
        $tools = new ToolsMarketing;

        if ($request->has('title')) {
            if (request('title') != '') {
                $tools = $tools->where('title', 'like', '%' . request('title') . '%');
            }
        }

        $tools = $tools->orderBy('title', 'asc')->paginate(10);
        return view('admin.pages.tools-marketing.index')
        ->with('tools', $tools);
    }

    public function create()
    {
        return view('admin.pages.tools-marketing.create');
    }

    public function store(Request $request)
    {
        $data = validateToolsMarketing($request);
        
        $tool = ToolsMarketing::create($data);
        return redirect()
        ->route('admin.tools-mkt.edit', ['tool' => $tool])
        ->with('success', "Ferramenta de Marketing Incluído");
    }

    public function edit(ToolsMarketing $tool)
    {
        return view('admin.pages.tools-marketing.edit')
        ->with('tool', $tool);
    }


    public function update(Request $request)
    {
        $data = validateToolsMarketing($request);
        ToolsMarketing::find($request->tool_id)->update($data);

        return redirect()->back()->with('success', "Ferramenta de Marketing Editado");
    }

    public function delete(ToolsMarketing $tool)
    {
        $tool->delete();
        return redirect()->back()->with('info', 'Ferramenta de Marketing Removido');
    }
}
