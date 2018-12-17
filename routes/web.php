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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clear-cache', function() {
    $exitCode = Illuminate\Support\Facades\Artisan::call('cache:clear');
      $exitCode = Illuminate\Support\Facades\Artisan::call('route:clear');
        $exitCode = Illuminate\Support\Facades\Artisan::call('config:clear');
    return $exitCode;
    // return what you want
});

  Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/business', 'Auth\LoginController@showBusinessLoginForm');
     Route::get('/login/affiliate', 'Auth\LoginController@showAffiliateLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/business', 'Auth\RegisterController@showBusinessRegisterForm');
    Route::get('/register/affiliate', 'Auth\RegisterController@showAffiliateRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/business', 'Auth\LoginController@businessLogin');
    Route::post('/login/affiliate', 'Auth\LoginController@affiliateLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/affiliate', 'Auth\RegisterController@createAffiliate');
    Route::post('/register/business', 'Auth\RegisterController@createBusiness');

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/admin', 'admin');
    Route::view('/affiliate', 'affiliate');
    Route::view('/business', 'business');