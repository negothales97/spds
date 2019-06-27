<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('service_provider')->user();

    //dd($users);

    return view('service-provider.home');
})->name('home');

