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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () { return view('login'); });
Route::get('logOut','HomeController@logOut');

Route::get('/registro', function () {
    return view('registro');
});

Route::post('registro', 'HomeController@insertar');

Route::post('login', 'HomeController@login');

Route::get('login', function () {
   return view('login', ['error' => ''], ['estado' => 'registrarme']);});

Route::get('registro', function () {
   return view('registro', ['error' => '']);});

 Route::get('principal', 'HomeController@Products', function () {
   return controller('HomeController@Products');
  });
