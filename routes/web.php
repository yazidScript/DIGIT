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

Route::get('/', function () {

   $karyawan = \App\Karyawan::all();
    return view('user.home',['karyawan' => $karyawan]);
});


  //Admin //admin
Route::get('/logout-admin','AdminController@logoutadmin');
Route::view('/login-admin','admin.login');
Route::post('/login/admin', 'AdminController@loginadmin');


Route::get('/dashboard','AdminController@dashboard');

Route::get('/karyawan','AdminController@karyawan');
Route::get('/karyawan/tambah-karyawan','AdminController@tambah');
Route::post('/karyawan/tambah-karyawan','AdminController@tambahkaryawan');
Route::get('/karyawan/{id}/edit-karyawan','AdminController@editkaryawan');
Route::post('/karyawan/{id}/updatekaryawan','AdminController@updatekaryawan');
Route::get('/karyawan/{id}/deletekaryawan','AdminController@deletekaryawan');
