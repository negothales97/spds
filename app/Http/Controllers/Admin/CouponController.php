<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coupon;

class CouponController extends Controller
{
    public function show(Request $request)
    {
        $coupons = new Coupon;

        if ($request->has('code')) {
            if (request('code') != '') {
                $coupons = $coupons->where('code', 'like', '%' . request('code') . '%');
            }
        }

        $coupons = $coupons->orderBy('code', 'asc')->paginate(10);
        return view('admin.pages.coupon.index')
        ->with('coupons', $coupons);
    }

    public function create()
    {
        return view('admin.pages.coupon.create');
    }

    public function store(Request $request)
    {
        $data = validateCoupon($request);
        
        $coupon = Coupon::create($data);
        return redirect()
        ->route('admin.coupon.edit', ['coupon' => $coupon])
        ->with('success', "Cupom Incluído");
    }

    public function edit(Coupon $coupon)
    {
        $coupon->value = convertMoneyUSAtoBrazil($coupon->value);
        $coupon->validity = convertDateUSAtoBrazil($coupon->validity);
        return view('admin.pages.coupon.edit')
        ->with('coupon', $coupon);
        
    }


    public function update(Request $request)
    {
        $data = validateCoupon($request);
        Coupon::find($request->coupon_id)->update($data);

        return redirect()->back()->with('success', "Cupom Editado");
    }

    public function delete(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->back()->with('info', 'Cupom Removido');
    }
}
