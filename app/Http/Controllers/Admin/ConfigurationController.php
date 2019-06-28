<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ConfigurationController extends Controller
{
    public function configuration()
    {
        $auth = auth()->guard('admin')->user();
        return view('admin.pages.configuration')->with('auth', $auth);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name',
            'email'               => [
                'required',
                Rule::unique('admins')->ignore($request->id)
            ],
        ]);
        $auth = auth()->guard('admin')->user();
        $auth->name = $request->name;
        $auth->email = $request->email;
        $auth->save();
        return redirect()->back()->with('success', 'Dados Atualizados');

    }

    public function password(Request $request)
    {
        $request->validate([
            'password'  => "required|confirmed|min:6",
        ]);
        $auth = auth()->guard('admin')->user();
        
        $auth->password = bcrypt($request->password);
        $auth->save();
        return redirect()->back()->with('success', 'Senha Atualizada');
    }
}
