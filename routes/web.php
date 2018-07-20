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

Route::group(['middleware' => ['AuthMiddleware']], function () {
  Route::get('', function () {
    return view('Blank');
  });
});

Route::GET('login', 'Auth\LoginController@showLoginForm')->name('LoginForm');
Route::POST('login', 'Auth\LoginController@login')->name('Login');
Route::GET('logout', 'Auth\LoginController@logout')->name('Logout');

Route::get('/home', 'HomeController@index')->name('home');
