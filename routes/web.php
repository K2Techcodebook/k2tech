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
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clear-cache', function() {
   $exitCode =  Illuminate\Support\Facades\Artisan::call('cache:clear');
    $exitCode = Illuminate\Support\Facades\Artisan::call('route:clear');
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
    Route::get('/register/{id}', 'Auth\RegisterController@showBusinessRegisterFormshow')->name('business_signup_');
//POST ROUTE
    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/business', 'Auth\LoginController@businessLogin')->name('log_business');
    Route::post('/login/affiliate', 'Auth\LoginController@affiliateLogin')->name('log_affiliate');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/affiliate', 'Auth\RegisterController@createAffiliate')->name('reg_affiliate');
    Route::post('/register/business', 'Auth\RegisterController@createBusiness')->name('reg_business');
//DASBOARD AFTER LOGIN

  //  Route::view('/home', 'home')->middleware('auth');
    // Route::view('/admin', 'admin');

//General Pages
Route::group([ 'middleware' => [ 'auth'] ], function(){
//GET ROUTE


  //POST ROUTE

});

    Route::group(['middleware' => 'admin'], function()
{
Route::match(['get', 'post'], '/superadmin', 'AdminController@index')->name('admin.dashboard');
});
    Route::group(['middleware' => 'affi'], function()
{
//GET ROUTE
Route::match(['get', 'post'], '/affiliates', 'AffiliateController@index')->name('affiliate.dashboard');
Route::get('/Affilate', 'AffiliateController@Affilatebox')->name('Affilate-box');
Route::get('/affiliate-profile', 'AffiliateController@profile')->name('-profile');
  //POST ROUTE
 Route::post('/Update_profile', 'AffiliateController@Update_profile')->name('Update_profile');
});
    Route::group(['middleware' => 'biz'], function()
{
   //  Route::view('/business', 'business')->name('business.dashboard');
Route::match(['get', 'post'], '/business', 'BusinessController@index')->name('business.dashboard');
Route::get('/profile', 'BusinessController@profile')->name('profile');
Route::get('/new_project', 'BusinessController@create_project')->name('new_project');
});
