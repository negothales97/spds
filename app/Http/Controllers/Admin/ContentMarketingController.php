<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContentMarketing;

class ContentMarketingController extends Controller
{
    public function show(Request $request)
    {
        $contents = new ContentMarketing;

        if ($request->has('title')) {
            if (request('title') != '') {
                $contents = $contents->where('title', 'like', '%' . request('title') . '%');
            }
        }

        $contents = $contents->orderBy('title', 'asc')->paginate(10);
        return view('admin.pages.content-marketing.index')
        ->with('contents', $contents);
    }

    public function create()
    {
        return view('admin.pages.content-marketing.create');
    }

    public function store(Request $request)
    {
        $data = validateContentMarketing($request);
        
        $content = ContentMarketing::create($data);
        return redirect()
        ->route('admin.content-mkt.edit', ['content' => $content])
        ->with('success', "Ferramenta de Marketing Incluído");
    }

    public function edit(ContentMarketing $content)
    {
        return view('admin.pages.content-marketing.edit')
        ->with('content', $content);
    }


    public function update(Request $request)
    {
        $data = validateContentMarketing($request);
        ContentMarketing::find($request->content_id)->update($data);

        return redirect()->back()->with('success', "Ferramenta de Marketing Editado");
    }

    public function delete(ContentMarketing $content)
    {
        $content->delete();
        return redirect()->back()->with('info', 'Ferramenta de Marketing Removido');
    }
}
