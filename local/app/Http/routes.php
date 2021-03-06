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

Route::get('/', 'HomeController@home');	

Route::get('/register', 'RegisterController@getRegister');
Route::post('/postRegister', 'RegisterController@postRegister');

Route::get('/login', 'LoginController@getLogin');
Route::post('/postLogin', 'LoginController@postLogin');

Route::get('pageAksesKhusus', function(){
	return view('pageAksesKhusus');
});

Route::get('/delete', 'AdminController@delete');
Route::get('/update', 'AdminController@update');

Route::get('/logout', function(){
	Auth::logout();
	return "Sukses Logout";
});

