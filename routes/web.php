<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// forntend_Routes
Route::get('/curriculam','Frontend\WebsiteContrller@curriculam')->name('curriculam_route');

// user routes
Route::get('/', "Frontend\WebsiteContrller@index")->name('website_index');
Route::post('/user_save',"Frontend\UserController@store")->name('user_store');
Route::get('/user_edit/{id}', "Frontend\UserController@edit")->name('user_edit');
Route::post('/user_update/{id}',"Backend\UserController@update")->name('user_update');

// CustomAuthRoutes
Route::get('/user_login','CustomAuth\CustomAuthController@index')->name('user_login');
Route::post('/user_login_post','CustomAuth\CustomAuthController@customLogin')->name('user_login_post');
Route::get('/user_dashboard/{id}','CustomAuth\CustomAuthController@user_dashboard')->name('user_dashboard');

//black routes
Route::get('/blank','BlankController@index')->name('blank_index');
Route::get('/blank_show','BlankController@index')->name('blank_show');
Route::get('/blank_edit','BlankController@index')->name('blank_edit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
