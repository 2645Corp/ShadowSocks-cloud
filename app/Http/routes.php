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
//视图路由


Route::get('/', function () {
    return redirect('/auth/login');
});

Route::get('home', ['middleware' => 'auth', 'uses'=>'DashboardController@index']);

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//数据路由
Route::post('/signinAction','LoginController@signinAction');
Route::post('/signupAction','LoginController@signupAction');
