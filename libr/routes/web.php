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

// 业务 路由
Route::prefix('api')->group(function () {
    Route::post('login', 'User\UserController@login');
    Route::get('logout','User\UserController@logout');
    Route::get('checkAuth','User\UserController@checkAuth');
    Route::resource('user','User\UserController')->middleware('checkok');
});
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
