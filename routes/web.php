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

  Route::prefix('pasien')->group(function () {
    Route::GET('', 'PasienController@Data')->name('Data-Pasien');
    Route::GET('tambah', 'PasienController@Tambah')->name('Tambah-Pasien');
    Route::POST('tambah', 'PasienController@submitTambah')->name('submitTambah-Pasien');
    Route::GET('{id}/edit', 'PasienController@Edit')->name('Edit-Pasien');
    Route::POST('{id}/edit', 'PasienController@submitEdit')->name('submitEdit-Pasien');
    Route::GET('{id}/hapus', 'PasienController@Hapus')->name('Hapus-Pasien');
  });

  Route::prefix('kunjungan')->group(function () {
    Route::GET('{idPasien}', 'KunjunganController@Data')->name('Data-Kunjungan');
    Route::GET('{idPasien}/tambah', 'KunjunganController@Tambah')->name('Tambah-Kunjungan');
    Route::POST('{idPasien}/tambah', 'KunjunganController@submitTambah')->name('submitTambah-Kunjungan');
    Route::GET('{id}/edit', 'KunjunganController@Edit')->name('Edit-Kunjungan');
    Route::POST('{id}/edit', 'KunjunganController@submitEdit')->name('submitEdit-Kunjungan');
    Route::GET('{id}/hapus', 'KunjunganController@Hapus')->name('Hapus-Kunjungan');
  });

  Route::prefix('rekam_medis')->group(function () {
    Route::GET('statistik', 'RekamMedikController@Statistik')->name('Statistik-Rekam-Medis');
    Route::prefix('data')->group(function () {
      Route::GET('', 'RekamMedikController@Data')->name('Data-Penyimpanan-Rekam-Medis');
      Route::GET('tambah', 'RekamMedikController@Tambah')->name('Tambah-Penyimpanan-Rekam-Medis');
      Route::POST('tambah', 'RekamMedikController@submitTambah')->name('submitTambah-Penyimpanan-Rekam-Medis');
      Route::GET('{id}/edit', 'RekamMedikController@Edit')->name('Edit-Penyimpanan-Rekam-Medis');
      Route::POST('{id}/edit', 'RekamMedikController@submitEdit')->name('submitEdit-Penyimpanan-Rekam-Medis');
      Route::GET('{id}/hapus', 'RekamMedikController@Hapus')->name('Hapus-Penyimpanan-Rekam-Medis');
    });
  });
});


Route::get('/home', 'HomeController@index')->name('home');
