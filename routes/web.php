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

// Route::get('/dashboard', function () {
//     if (session('berhasil_login')) {
//        return view('index');
//     }else{
//         return redirect('/');
//     }
// });


Route::get('/','login\LoginController@index')->name('login');

Route::post('/login','login\LoginController@login')->name('login');

Route::post('/logout','login\LoginController@logout')->name('logout');

Route::get('/daftarbuku', 'DataBukuController@index')->middleware('CekLoginMiddleware');

Route::get('/daftarbuku/tambah', 'DataBukuController@create')->middleware('CekLoginMiddleware');

Route::post('/daftarbuku/simpan', 'DataBukuController@store')->middleware('CekLoginMiddleware');

Route::get('/daftarbuku/ubah/{id}', 'DataBukuController@edit')->middleware('CekLoginMiddleware');

Route::post('/daftarbuku/update/{id}', 'DataBukuController@update')->middleware('CekLoginMiddleware');

Route::get('/daftarbuku/hapus/{id}', 'DataBukuController@destroy')->middleware('CekLoginMiddleware');


Route::get('/daftarbuku', 'DataBukuController@index');

Route::get('/daftarbuku/tambah', 'DataBukuController@create');

Route::post('/daftarbuku/simpan', 'DataBukuController@store');

Route::get('/daftarbuku/ubah/{id}', 'DataBukuController@edit');

Route::post('/daftarbuku/update/{id}', 'DataBukuController@update');

Route::get('/daftarbuku/hapus/{id}', 'DataBukuController@destroy');


Route::get('/DataPengunjung', 'PengunjungController@index');

Route::get('/DataPengunjung/tambah', 'PengunjungController@create');

Route::delete('/DataPengunjung/{DataPengunjung}', 'PengunjungController@destroy');

Route::get('/DataPeminjaman', 'DataPeminjamanController@index');

Route::get('/DataPeminjaman/tambah', 'DataPeminjamanController@create');

Route::post('/DataPeminjaman/simpan', 'DataPeminjamanController@store');

Route::get('/DataPeminjaman/ubah/{id}', 'DataPeminjamanController@edit');

Route::post('/DataPeminjaman/update/{id}', 'DataPeminjamanController@update');

Route::get('/DataPeminjaman/hapus/{id}', 'DataPeminjamanController@destroy');