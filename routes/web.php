<?php

Route::GET('login', 'Auth\LoginController@showLoginForm')->name('LoginForm');
Route::POST('login', 'Auth\LoginController@login')->name('Login');
Route::GET('logout', 'Auth\LoginController@logout')->name('Logout');

Route::group(['middleware' => ['AuthMiddleware']], function () {
  Route::GET('', 'DashboardController@Dashboard')->name('Dashboard');

  Route::prefix('user')->group(function () {
      Route::GET('', 'UserController@Data')->name('Data-User');
      Route::GET('tambah', 'UserController@Tambah')->name('Tambah-User');
      Route::POST('tambah', 'UserController@submitTambah')->name('submitTambah-User');
      Route::GET('{id}/edit', 'UserController@Edit')->name('Edit-User');
      Route::POST('{id}/edit', 'UserController@submitEdit')->name('submitEdit-User');
      Route::GET('{id}/hapus', 'UserController@Hapus')->name('Hapus-User');
    });
});


Route::get('/home', 'HomeController@index')->name('home');
