<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{Service_provider, OccupationArea};

class ServiceProviderController extends Controller
{
    public function show(Request $request)
    {
        $service_providers = new Service_provider;

        if ($request->has('name')) {
            if (request('name') != '') {
                $service_providers = $service_providers->where('name', 'like', '%' . request('name') . '%');
            }
        }
        if ($request->has('email')) {
            if (request('email') != '') {
                $service_providers = $service_providers->where('email', 'like', '%' . request('email') . '%');
            }
        }

        $service_providers = $service_providers->orderBy('name', 'asc')->paginate(10);
        return view('admin.pages.service-provider.index')
        ->with('service_providers', $service_providers);
    }

    public function create()
    {
        return view('admin.pages.service-provider.create')
        ->with('occupations', OccupationArea::all());
    }

    public function store(Request $request)
    {
        $data = validateServices($request);
        
        $data['logo'] = $this->validateLogo($request);
        $service_provider = Service_provider::create($data);
        return redirect()
        ->route('admin.service_provider.edit', ['service_provider' => $service_provider])
        ->with('success', "Prestador de serviço Incluído");
    }

    public function edit(Service_provider $service_provider)
    {
        return view('admin.pages.service-provider.edit')
        ->with('occupations', OccupationArea::all())
        ->with('provider', $service_provider);
        
    }

    public function statusValidate(Service_provider $service_provider)
    {
        $service_provider->status == 0 ? $service_provider->status = 1 : $service_provider->status = 0;
        $service_provider->save();
        return redirect()->back()->with('info','Status Alterado');
    }

    public function update(Request $request)
    {
        $data = validateServices($request);
        if($request->file()){
            $data['logo'] = $this->validateLogo($request);
        }
        Service_provider::find($request->service_provider_id)->update($data);

        return redirect()->back()->with('success', "Prestador de serviço Editado");
    }

    public function delete(Service_provider $service_provider)
    {
        $service_provider->delete();
        return redirect()->back()->with('info', 'Prestador de serviço Removido');
    }

    private function validateLogo(Request $request)
    {
        if (isset($request->logo)) {
            $arq_img_name = imgValidate(
                                '/images/logo/',
                                $request->file('logo'),
                                'service_providers',
                                'logo',
                            );
        } else {
            $arq_img_name = 'logo.jpg';
        }
        return $arq_img_name;
    }
}
