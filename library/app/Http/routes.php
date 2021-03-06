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

Route::get('/', function () {
    return view('welcome');
});

// 业务 路由
Route::group(['prefix' => 'api'], function()
{
    Route::post('login', 'User\UserController@login');
    Route::get('logout', 'User\UserController@logout');
    Route::get('checkAuth', 'User\UserController@checkAuth');
    Route::resource('user', 'User\UserController');

    Route::resource('banner', 'Banner');
    Route::post('hidebanner', 'Banner@hide');
    Route::post('del_banner', 'Banner@del');

    Route::resource('nav', 'Nav');
    Route::get('getCNav', 'Nav@getCNav');
    Route::get('getAll', 'Nav@getAll');
    Route::post('del_nav', 'Nav@del');

    Route::resource('article', 'Article');
    Route::get('getArt', 'Article@getArt');
    Route::post('del_art', 'Article@del');

    Route::resource('notice', 'Notice');
    Route::post('hidenotice', 'Notice@hide');
    Route::post('del_notice', 'Notice@del');
    Route::get('indexPage', 'Notice@indexPage');
    Route::post('upload', 'Notice@uploadImg');

    Route::group(['middleware' => ['checkok']], function()
    {
        Route::get('/', function()
        {
            // Has Foo And Bar Middleware
        });
    });
});


//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
