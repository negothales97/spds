<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Link;

class LinkController extends Controller
{
    public function show(Request $request)
    {
        $links = new Link;

        if ($request->has('title')) {
            if (request('title') != '') {
                $links = $links->where('title', 'like', '%' . request('title') . '%');
            }
        }

        $links = $links->orderBy('title', 'asc')->paginate(10);
        return view('admin.pages.link.index')
        ->with('links', $links);
    }

    public function create()
    {
        return view('admin.pages.link.create');
    }

    public function store(Request $request)
    {
        $data = validateLink($request);
        
        $link = Link::create($data);
        return redirect()
        ->route('admin.link.edit', ['link' => $link])
        ->with('success', "Link Incluído");
    }

    public function edit(Link $link)
    {
        return view('admin.pages.link.edit')
        ->with('link', $link);
    }

    public function update(Request $request)
    {
        $data = validateLink($request);
        Link::find($request->link_id)->update($data);

        return redirect()->back()->with('success', "Link Editado");
    }

    public function delete(Link $link)
    {
        $link->delete();
        return redirect()->back()->with('info', 'Link Removido');
    }
}
