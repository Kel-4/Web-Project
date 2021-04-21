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

Route::get('/', 'DataBukuController@index');

Route::get('/tambah', 'DataBukuController@create');

Route::post('/simpan', 'DataBukuController@store');

Route::get('/ubah/{id}', 'DataBukuController@edit');

Route::post('/update/{id}', 'DataBukuController@update');

Route::get('/hapus/{id}', 'DataBukuController@destroy');


