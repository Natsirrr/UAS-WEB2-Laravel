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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('create-mahasiswa', 'MahasiswaController@create')->name('mhs.tambah');
Route::post('simpan-mahasiswa','MahasiswaController@store')->name('mhs.simpan');
Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('mhs.edit');
Route::post('update-mahasiswa/{id}','MahasiswaController@update')->name('mhs.update');
Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@del')->name('mhs.hapus');

Route::get('makul', 'MakulController@index')->name('makul');
Route::get('create-makul', 'MakulController@create')->name('makul.tambah');
Route::post('simpan-makul', 'MakulController@store')->name('makul.simpan');
Route::get('edit-makul/{id}', 'MakulController@edit')->name('makul.edit');
Route::post('update-makul/{id}', 'MakulController@update')->name('makul.update');
Route::get('hapus-makul/{id}', 'MakulController@del')->name('makul.hapus');

Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('create-nilai', 'NilaiController@create')->name('nilai.tambah');
Route::post('simpan-nilai', 'NilaiController@store')->name('nilai.simpan');
Route::get('edit-nilai/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('update-nilai/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('hapus-nilai/{id}', 'NilaiController@destroy')->name('nilai.hapus');