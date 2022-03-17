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
    return view('index');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/supplier', function () {
    return view('supplier');
});

Route::get('/barang', function () {
    return view('barang');
});