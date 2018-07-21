<?php

Route::GET('login', 'Auth\LoginController@showLoginForm')->name('Login');
Route::POST('login', 'Auth\LoginController@login')->name('submitLogin');
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

  Route::prefix('poli')->group(function () {
    Route::GET('', 'PoliController@Data')->name('Data-Poli');
    Route::GET('tambah', 'PoliController@Tambah')->name('Tambah-Poli');
    Route::POST('tambah', 'PoliController@submitTambah')->name('submitTambah-Poli');
    Route::GET('{id}/edit', 'PoliController@Edit')->name('Edit-Poli');
    Route::POST('{id}/edit', 'PoliController@submitEdit')->name('submitEdit-Poli');
    Route::GET('{id}/hapus', 'PoliController@Hapus')->name('Hapus-Poli');
  });

});


Route::get('/home', 'HomeController@index')->name('home');
