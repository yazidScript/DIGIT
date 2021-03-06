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
		$karyawan = DB::table('karyawan')->paginate(3);
    return view('user.home',['karyawan' => $karyawan]);
});


  //Admin //admin
Route::get('/logout-admin','AdminController@logoutadmin');
Route::view('/login-admin','admin.login');
Route::post('/login/admin', 'AdminController@loginadmin');


Route::get('/home/karyawan','FrontendController@homekaryawan');
Route::get('/karyawan/{id}/detail-karyawan','FrontendController@detail');

  Route::get('/dashboard','AdminController@dashboard');
  Route::get('/dashboard/karyawan','AdminController@karyawan');
  Route::get('/karyawan/tambah-karyawan','AdminController@tambah');
  Route::post('/karyawan/tambah-karyawan','AdminController@tambahkaryawan');
  Route::get('/karyawan/{id}/edit-karyawan','AdminController@editkaryawan');
  Route::post('/karyawan/{id}/updatekaryawan','AdminController@updatekaryawan');
  Route::get('/karyawan/{id}/deletekaryawan','AdminController@deletekaryawan');
