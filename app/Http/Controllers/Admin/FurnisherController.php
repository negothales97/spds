<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{Furnisher, OccupationArea};

class FurnisherController extends Controller
{
    public function show(Request $request)
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

        $furnishers = $furnishers->orderBy('name', 'asc')->paginate(10);
        return view('admin.pages.furnisher.index')
        ->with('furnishers', $furnishers);
    }

    public function create()
    {
        return view('admin.pages.furnisher.create')
        ->with('occupations', OccupationArea::all());
    }

    public function store(Request $request)
    {
        $data = validateServices($request);
        
        $data['logo'] = $this->validateLogo($request);
        $furnisher = Furnisher::create($data);
        return redirect()
        ->route('admin.furnisher.edit', ['furnisher' => $furnisher])
        ->with('success', "Prestador de serviço Incluído");
    }

    public function edit(Furnisher $furnisher)
    {
        return view('admin.pages.furnisher.edit')
        ->with('occupations', OccupationArea::all())
        ->with('furnisher', $furnisher);
        
    }

    public function statusValidate(Furnisher $furnisher)
    {
        $furnisher->status == 0 ? $furnisher->status = 1 : $furnisher->status = 0;
        $furnisher->save();
        return redirect()->back()->with('info','Status Alterado');
    }

    public function update(Request $request)
    {
        $data = validateServices($request);
        if($request->file()){
            $data['logo'] = $this->validateLogo($request);
        }
        Furnisher::find($request->furnisher_id)->update($data);

        return redirect()->back()->with('success', "Prestador de serviço Editado");
    }

    public function delete(Furnisher $furnisher)
    {
        $furnisher->delete();
        return redirect()->back()->with('info', 'Prestador de serviço Removido');
    }

    public function password(Request $request)
    {
        $request->validate([
            'password'  => "required|confirmed|min:6",
        ]);
        $furnisher = Furnisher::find($request->id);
        
        $furnisher->password = bcrypt($request->password);
        $furnisher->save();
        return redirect()->back()->with('success', 'Senha Atualizada');
    }

    private function validateLogo(Request $request)
    {
        if (isset($request->logo)) {
            $request->validate([
                'logo' => 'mimes:jpg,jpeg,png'
            ]);
            $arq_img_name = imgValidate(
                                '/images/logo/',
                                $request->file('logo'),
                                'furnishers',
                                'logo',
                            );
        } else {
            $arq_img_name = 'logo.jpg';
        }
        return $arq_img_name;
    }
}
