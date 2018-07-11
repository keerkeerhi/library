<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
error_reporting(E_ALL &~ E_NOTICE);

Route::post('/checkAuth',function(){
    $arr = null;
    if (Auth::check())
        $arr = ['ispassed' => true, 'info' => Auth::user()];
    else
        $arr = ['ispassed' => false];
    return \Response::json($arr);
});
Route::post('/logout',function(){
    Auth::logout();
    return '1';
});
Route::post('/login','WelcomeController@login');
Route::resource('staff','StaffController');
Route::resource('customs','CustomsController');
Route::resource('dict','DictController');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
