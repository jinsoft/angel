<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'IndexController@index');
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('info', 'IndexController@info');
    });
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::post('logout', 'IndexController@logout');
    Route::get('/', 'IndexController@index');
    Route::get('/dashboard', 'IndexController@dashboard')->name('admin.dashboard');
});
