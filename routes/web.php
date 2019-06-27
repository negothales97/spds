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
    Route::get('/editar/{student}', 'Admin\StudentController@edit')->name('edit');
    Route::post('update', 'Admin\StudentController@update')->name('update');
    Route::get('status/{student}', 'Admin\StudentController@statusValidate')->name('status');
    Route::post('delete/{student}', 'Admin\StudentController@delete')->name('delete');

    Route::group(['prefix' => 'formacao', 'as' => 'formation.'], function () {
      Route::post('store', 'Admin\FormationController@store')->name('store');
      Route::post('update', 'Admin\FormationController@update')->name('update');
      Route::get('delete/{formation}', 'Admin\FormationController@delete')->name('delete');
    });
    Route::group(['prefix' => 'experiencia-profissional', 'as' => 'professional.'], function () {
      Route::post('store', 'Admin\ProfessionalController@store')->name('store');
      Route::post('update', 'Admin\ProfessionalController@update')->name('update');
      Route::get('delete/{professional}', 'Admin\ProfessionalController@delete')->name('delete');
    });

    Route::group(['prefix' => 'idioma', 'as' => 'language.'], function () {
      Route::post('store', 'Admin\LanguageController@store')->name('store');
      Route::post('update', 'Admin\LanguageController@update')->name('update');
      Route::get('delete/{language}', 'Admin\LanguageController@delete')->name('delete');
    });

    Route::group(['prefix' => 'conhecimentos-informatica', 'as' => 'knowledge.'], function () {
      Route::post('store', 'Admin\KnowledgeController@store')->name('store');
      Route::post('update', 'Admin\KnowledgeController@update')->name('update');
      Route::get('delete/{knowledge}', 'Admin\KnowledgeController@delete')->name('delete');
    });
  });

  Route::group(['prefix' => 'prestador', 'as' => 'service_provider.'], function () {
    Route::get('/', 'Admin\ServiceProviderController@show')->name('show');
    Route::get('/criar', 'Admin\ServiceProviderController@create')->name('create');
    Route::post('store', 'Admin\ServiceProviderController@store')->name('store');
    Route::get('/editar/{service_provider}', 'Admin\ServiceProviderController@edit')->name('edit');
    Route::post('update', 'Admin\ServiceProviderController@update')->name('update');
    Route::get('status/{service_provider}', 'Admin\ServiceProviderController@statusValidate')->name('status');
    Route::get('delete/{service_provider}', 'Admin\ServiceProviderController@delete')->name('delete');
  });

  Route::group(['prefix' => 'empresa', 'as' => 'company.'], function () {
    Route::get('/', 'Admin\CompanyController@show')->name('show');
    Route::get('/criar', 'Admin\CompanyController@create')->name('create');
    Route::post('store', 'Admin\CompanyController@store')->name('store');
    Route::get('/editar/{company}', 'Admin\CompanyController@edit')->name('edit');
    Route::post('update', 'Admin\CompanyController@update')->name('update');
    Route::get('status/{company}', 'Admin\CompanyController@statusValidate')->name('status');
    Route::get('delete/{company}', 'Admin\CompanyController@delete')->name('delete');
  });

  Route::group(['prefix' => 'cupom', 'as' => 'coupon.'], function () {
    Route::get('/', 'Admin\CouponController@show')->name('show');
    Route::get('/criar', 'Admin\CouponController@create')->name('create');
    Route::post('store', 'Admin\CouponController@store')->name('store');
    Route::get('/editar/{coupon}', 'Admin\CouponController@edit')->name('edit');
    Route::post('update', 'Admin\CouponController@update')->name('update');
    Route::get('delete/{coupon}', 'Admin\CouponController@delete')->name('delete');
  });

  Route::group(['prefix' => 'link', 'as' => 'link.'], function () {
    Route::get('/', 'Admin\LinkController@show')->name('show');
    Route::get('/criar', 'Admin\LinkController@create')->name('create');
    Route::post('store', 'Admin\LinkController@store')->name('store');
    Route::get('/editar/{link}', 'Admin\LinkController@edit')->name('edit');
    Route::post('update', 'Admin\LinkController@update')->name('update');
    Route::get('delete/{link}', 'Admin\LinkController@delete')->name('delete');
  });
  Route::group(['prefix' => 'ferramentas-marketing', 'as' => 'tools-mkt.'], function () {
    Route::get('/', 'Admin\ToolsMarketingController@show')->name('show');
    Route::get('/criar', 'Admin\ToolsMarketingController@create')->name('create');
    Route::post('store', 'Admin\ToolsMarketingController@store')->name('store');
    Route::get('/editar/{tool}', 'Admin\ToolsMarketingController@edit')->name('edit');
    Route::post('update', 'Admin\ToolsMarketingController@update')->name('update');
    Route::get('delete/{tool}', 'Admin\ToolsMarketingController@delete')->name('delete');
  });
  Route::group(['prefix' => 'conteudo-marketing', 'as' => 'content-mkt.'], function () {
    Route::get('/', 'Admin\ContentMarketingController@show')->name('show');
    Route::get('/criar', 'Admin\ContentMarketingController@create')->name('create');
    Route::post('store', 'Admin\ContentMarketingController@store')->name('store');
    Route::get('/editar/{content}', 'Admin\ContentMarketingController@edit')->name('edit');
    Route::post('update', 'Admin\ContentMarketingController@update')->name('update');
    Route::get('delete/{content}', 'Admin\ContentMarketingController@delete')->name('delete');
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

Route::group(['prefix' => 'student'], function () {
  Route::get('/login', 'StudentAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'StudentAuth\LoginController@login');
  Route::post('/logout', 'StudentAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'StudentAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'StudentAuth\RegisterController@register');

  Route::post('/password/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'StudentAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm');
});

Route::post('cursos/', 'Admin\StudentController@getCourses')->name('get-courses');
Route::post('cidades/', 'Admin\StudentController@getCities')->name('get-cities');
Route::post('conhecimentos/', 'Admin\StudentController@getSubknowledges')->name('get-subknowledges');

Route::group(['prefix' => 'service-provider'], function () {
  Route::get('/login', 'ServiceProviderAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'ServiceProviderAuth\LoginController@login');
  Route::post('/logout', 'ServiceProviderAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'ServiceProviderAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ServiceProviderAuth\RegisterController@register');

  Route::post('/password/email', 'ServiceProviderAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ServiceProviderAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ServiceProviderAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ServiceProviderAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'company'], function () {
  Route::get('/login', 'CompanyAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CompanyAuth\LoginController@login');
  Route::post('/logout', 'CompanyAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CompanyAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CompanyAuth\RegisterController@register');

  Route::post('/password/email', 'CompanyAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CompanyAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CompanyAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CompanyAuth\ResetPasswordController@showResetForm');
});
