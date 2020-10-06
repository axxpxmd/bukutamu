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

Route::get('/', 'BukuTamuController@index');
Route::post('/store', 'BukuTamuController@store')->name('store');
Route::get('/cetak-data/{id_registrasi}', 'BukuTamuController@cetakData')->name('cetak-data');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
