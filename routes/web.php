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

Route::get('/', function () {
    return view('welcome');
});

Route::get('latihanlayout', function () {
	return view('nrpgenap');
});

Route::get('filemateri1', function () {
	return view('hello');
});

Route::get('filemateri2', function () {
	return view('js1');
});

Route::get('filemateri3', function () {
	return view('js2');
});

Route::get('filemateri4', function () {
	return view('link');
});

Route::get('filemateri5', function () {
	return view('responsive');
});

Route::get('filemateri6', function () {
	return view('responsive2');
});

Route::get('filemateri7', function () {
	return view('style');
});

Route::get('tugas1', function () {
	return view('tugas1');
});

Route::get('tugas2(1)', function () {
	return view('BS4DropdownsArif');
});

Route::get('tugas2(2)', function () {
	return view('BS4DropdownsFarhan');
});


Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


Route::get('master', function () {
	return view('master');
});

Route::get('/master/home', function () {
	return view('home');
});

Route::get('/master/tentang', function () {
	return view('tentang');
});

Route::get('/master/kontak', function () {
	return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//latihan soal laki-laki
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@nilai');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//latihan soal perempuan
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//DB tabel tumbuhan
Route::get('/tumbuhan','App\Http\Controllers\TumbuhanController@index');
Route::get('/tumbuhan/tambah','App\Http\Controllers\TumbuhanController@tambah');
Route::post('/tumbuhan/store','App\Http\Controllers\TumbuhanController@store');
Route::get('/tumbuhan/edit/{id}','App\Http\Controllers\TumbuhanController@edit');
Route::post('/tumbuhan/update','App\Http\Controllers\TumbuhanController@update');
Route::get('/tumbuhan/hapus/{id}','App\Http\Controllers\TumbuhanController@hapus');

Route::get('/combo','App\Http\Controllers\KategoriController@kategori');
Route::get('/combo/request','App\Http\Controllers\KategoriController@request');
Route::get('/hasilcombo/{id}','App\Http\Controllers\KategoriController@hasil');
