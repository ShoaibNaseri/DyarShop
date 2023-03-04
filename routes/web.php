<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\front;

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

Route::get('/', 'front\HomeController@index')->name('home');
Route::get('/app', function () {
    return view('front.app');
});

// fronEnd Routes 
Route::get('/home/', 'front\HomeController@index')->name('home');
Route::get('/universities', 'front\UniversityController@index')->name('universities');
Route::get('/contact', 'front\ContactController@index')->name('contact');
Route::get('/about', 'front\AboutController@index')->name('about');
Route::get('/program', 'front\ProgramController@index')->name('program');
Route::get('/products', 'front\ProductController@index')->name('productIndex');



//Show Login Page
Route::get('/admin', 'cms\AdminAuthController@loginPage')->name('adminLoginPage');

//Admin Register Routes
Route::get('/admin/register', 'cms\AdminAuthController@register')->name('adminRegisterPage');
Route::post('/admin/store', 'cms\AdminAuthController@store')->name('adminStore');

//Admin Login Routes
Route::post('/admin/login', 'cms\AdminAuthController@login')->name('adminLogin.submit');
Route::get('/admin/logout', 'cms\AdminAuthController@logout')->name('adminLogout');



//Admin Dashboard Routes
Route::middleware('auth:admin')->group(function () {
    // Admin Routes
    Route::resource('admin/slider', 'cms\SliderController');
    Route::get('/admin/dashboard', 'cms\AdminController@index')->name('adminDashboard');
    // Admin FrontEnd Routees 
    // Route::resource('admin/slider', 'cms\SliderController');
    Route::resource('admin/about', 'cms\AboutController');
    Route::resource('admin/contact', 'cms\ContactController');
    Route::resource('admin/team', 'cms\TeamController');
    Route::resource('admin/work', 'cms\WorkController');
    Route::resource('admin/service', 'cms\ServiceController');
    //ProductControll Routes
    Route::resource('admin/category', 'cms\CategoryController');
    Route::resource('admin/product', 'cms\ProductController');
});
