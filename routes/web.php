<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/', 'AuthController@index');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/users', 'AuthController@userpage');
Route::get('/users/datausers','AuthController@datausers');
Route::get('/users/form_users','AuthController@form_users');




Route::get('/dashboard', 'DashboardController@index');
Route::get('/simpanan', 'SimpananController@index');
Route::get('/simpanan/data_anggota','SimpananController@data_anggota'); //datatable
Route::get('/simpanan/form_simpanan/{id}','SimpananController@form_simpanan');
Route::post('/simpanan/store','SimpananController@store'); //utk post data anggota

Route::get('/simpanan/detile_simpanan/{id}', 'SimpananController@detile_simpanan');
Route::get('/simpanan/datasimpanan/{id}', 'SimpananController@datasimpanan'); //datatable



Route::get('/anggota', 'AnggotaController@index'); //untk lihat tabel
Route::get('/anggota/dataanggota','AnggotaController@dataanggota'); //datatable
Route::get('/anggota/form_anggota','AnggotaController@form_anggota'); //utk lihat form
Route::post('/anggota/store','AnggotaController@store'); //utk post data anggota




