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

Route::post('/','login\LoginController@login')->name('login');
Route::get('/','login\LoginController@index')->name('login');



// Route::post('/logout','login\LoginController@logout')->name('logout');
// Route::group(['middleware' => 'CekLoginMiddleware'], function(){
Route::group(['middleware' => 'auth'], function(){

Route::get('/daftarbuku', 'DataBukuController@index');

Route::get('/daftarbuku/tambah', 'DataBukuController@create');

Route::post('/daftarbuku/simpan', 'DataBukuController@store');

Route::get('/daftarbuku/ubah/{id}', 'DataBukuController@edit');

Route::post('/daftarbuku/update/{id}', 'DataBukuController@update');

Route::get('logout', 'login\LoginController@logout')->name('logout');

Route::get('/daftarbuku/hapus/{id}', 'DataBukuController@destroy');


// Route::get('/daftarbuku/tambah', 'DataBukuController@create');

// Route::post('/daftarbuku/simpan', 'DataBukuController@store');

// Route::get('/daftarbuku/ubah/{id}', 'DataBukuController@edit');

// Route::post('/daftarbuku/update/{id}', 'DataBukuController@update');

// Route::get('/daftarbuku/hapus/{id}', 'DataBukuController@destroy');


//DataPengunjung
Route::get('/DataPengunjung', 'PengunjungController@index');
Route::get('/DataPengunjung/tambah', 'PengunjungController@create');
Route::post('/DataPengunjung/simpan', 'PengunjungController@store');
Route::get('/DataPengunjung/hapus/{id}', 'PengunjungController@destroy');
Route::get('/DataPengunjung/ubah/{id}', 'PengunjungController@edit');
Route::post('/DataPengunjung/update/{id}', 'PengunjungController@update');


Route::get('/DataPeminjaman', 'DataPeminjamanController@index');

Route::get('/DataPeminjaman/tambah', 'DataPeminjamanController@create');

Route::post('/DataPeminjaman/simpan', 'DataPeminjamanController@store');

Route::get('/DataPeminjaman/ubah/{id}', 'DataPeminjamanController@edit');

Route::post('/DataPeminjaman/update/{id}', 'DataPeminjamanController@update');
});