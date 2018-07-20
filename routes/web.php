<?php

Route::GET('login', 'Auth\LoginController@showLoginForm')->name('LoginForm');
Route::POST('login', 'Auth\LoginController@login')->name('Login');
Route::GET('logout', 'Auth\LoginController@logout')->name('Logout');

Route::group(['middleware' => ['AuthMiddleware']], function () {
  Route::GET('', 'DashboardController@Dashboard');
});


Route::get('/home', 'HomeController@index')->name('home');
