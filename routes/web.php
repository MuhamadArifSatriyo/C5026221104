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
