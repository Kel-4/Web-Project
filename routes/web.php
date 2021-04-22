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
//     return view('index');
// });

Route::get('/daftarbuku/', 'DataBukuController@index');

Route::get('/daftarbuku/tambah', 'DataBukuController@create');

Route::post('/daftarbuku/simpan', 'DataBukuController@store');

Route::get('/daftarbuku/ubah/{id}', 'DataBukuController@edit');

Route::post('/daftarbuku/update/{id}', 'DataBukuController@update');

Route::get('/daftarbuku/hapus/{id}', 'DataBukuController@destroy');

Route::get('/DataPengunjung', 'PengunjungController@index');

Route::get('/DataPengunjung/tambah', 'PengunjungController@create');

Route::delete('/DataPengunjung/{DataPengunjung}', 'PengunjungController@destroy');

