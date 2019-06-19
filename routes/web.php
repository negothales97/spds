<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.auth.login');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => 'admin' ], function(){
	Route::get('/dashboard', function () {
	    return view('admin.pages.dashboard');
	});
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' =>'admin'], function () {
  Route::group(['prefix' => 'ex-alunos', 'as' => 'student.'], function () {
    Route::get('/', 'Admin\StudentController@show')->name('show');
    Route::get('/criar', 'Admin\StudentController@create')->name('create');
    Route::post('store', 'Admin\StudentController@store')->name('store');
    Route::get('/editar', 'Admin\StudentControlle@edit')->name('edit');
    Route::post('update', 'Admin\StudentControlle@update')->name('update');
    Route::post('delete', 'Admin\StudentControlle@delete')->name('delete');
  });
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  Route::get('/', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
