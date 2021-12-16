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

Route::get('/', "Frontend\WebsiteContrller@index")->name('website_index');
Route::post('/user_save',"Backend\UserContrller@store")->name('user_store');

// CustomAuthRoutes
Route::get('/user_login','CustomAuth\CustomAuthController@index')->name('user_login');
Route::post('/user_login_post','CustomAuth\CustomAuthController@customLogin')->name('user_login_post');
Route::get('/user_dashboard/{id}','CustomAuth\CustomAuthController@user_dashboard')->name('user_dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
