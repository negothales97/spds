<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('furnisher')->user();

    //dd($users);

    return view('furnisher.home');
})->name('home');

