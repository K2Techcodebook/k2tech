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
// Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clear-cache', function() {
    Illuminate\Support\Facades\Artisan::call('cache:clear');
    Illuminate\Support\Facades\Artisan::call('route:clear');
        $exitCode = Illuminate\Support\Facades\Artisan::call('config:clear');
    return $exitCode;
    // return what you want
});
//GET ROUTE
  Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/business', 'Auth\LoginController@showBusinessLoginForm')->name('business_sign');
     Route::get('/login/affiliate', 'Auth\LoginController@showAffiliateLoginForm')->name('affiliate_sign');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/business', 'Auth\RegisterController@showBusinessRegisterForm')->name('business_signup');
    Route::get('/register/affiliate', 'Auth\RegisterController@showAffiliateRegisterForm')->name('affiliate_signup');
//POST ROUTE
    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/business', 'Auth\LoginController@businessLogin');
    Route::post('/login/affiliate', 'Auth\LoginController@affiliateLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/affiliate', 'Auth\RegisterController@createAffiliate');
    Route::post('/register/business', 'Auth\RegisterController@createBusiness');
//DASBOARD AFTER LOGIN

    Route::view('/home', 'home')->middleware('auth');
    // Route::view('/admin', 'admin');



    Route::group(['middleware' => 'admin'], function()
{
Route::match(['get', 'post'], '/superadmin', 'AdminController@index')->name('admin.dashboard');
});
    Route::group(['middleware' => 'affi'], function()
{
 //Route::view('/affiliates', 'Maffiliates')->name('affiliate.dashboard');
Route::match(['get', 'post'], '/affiliates', 'AffiliateController@index')->name('affiliate.dashboard');
});
    Route::group(['middleware' => 'biz'], function()
{
   //  Route::view('/business', 'business')->name('business.dashboard');
Route::match(['get', 'post'], '/business', 'BusinessController@index')->name('business.dashboard');
});