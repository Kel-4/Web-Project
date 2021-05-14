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
// Route::get('/register',function(){
//     return view('register');
// });
// Route::get('/welcome',function(){
//     return view('welcome');
// });

Route::post('/','login\LoginController@login')->name('login');
Route::get('/','login\LoginController@index')->name('login');

Route::get('/guest', 'DataBukuController@guest')->name('guest');

// Route::post('/logout','login\LoginController@logout')->name('logout');
// Route::group(['middleware' => 'CekLoginMiddleware'], function(){
Route::group(['middleware' => 'auth'], function(){

Route::get('/daftarbuku', 'DataBukuController@index');

Route::get('/daftarbuku/tambah', 'DataBukuController@create');

Route::post('/daftarbuku/simpan', 'DataBukuController@store');

Route::get('/daftarbuku/ubah/{id}', 'DataBukuController@edit');

Route::post('/daftarbuku/update/{id}', 'DataBukuController@update');

Route::get('/daftarbuku/hapus/{id}', 'DataBukuController@destroy');

Route::get('logout', 'login\LoginController@logout')->name('logout');


Route::get('/DataAnggota', 'AnggotaController@index');
Route::get('/DataAnggota/tambah', 'AnggotaController@create');
Route::post('/DataAnggota/simpan', 'AnggotaController@store');
Route::get('/DataAnggota/hapus/{id}', 'AnggotaController@destroy');
Route::get('/DataAnggota/ubah/{id}', 'AnggotaController@edit');
Route::post('/DataAnggota/update/{id}', 'AnggotaController@update');
Route::get('/DataAnggota/cetak_kartu/{id}', 'AnggotaController@cetak_kartu')->name('cetak_kartu');


Route::get('/DataPeminjaman', 'DataPeminjamanController@index');
Route::get('/DataPeminjaman/tambah', 'DataPeminjamanController@create');
Route::post('/DataPeminjaman/simpan', 'DataPeminjamanController@store');
Route::get('/DataPeminjaman/ubah/{id}', 'DataPeminjamanController@edit');
Route::post('/DataPeminjaman/update/{id}', 'DataPeminjamanController@update');
Route::get('/DataPeminjaman/hapus/{id}', 'DataPeminjamanController@destroy');

Route::get('/DataPengembalian', 'DataPengembalianController@index');


});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
