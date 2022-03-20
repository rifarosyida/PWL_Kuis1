<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplierController;
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
Route::pattern('keyword', '[0-9a-zA-Z]+');
Route::get('/', [IndexController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'pegawai']);

Route::get('/pelanggan', [PelangganController::class, 'pelanggan']);

Route::get('/supplier', [SupplierController::class, 'supplier']);

// Route::get('/barang', [BarangController::class, 'barang']);
Route::get('/barang/{keyword}',[BarangController::class, 'barang'])->name('perempuan');

Route::get('/pelanggan/search', [PelangganController::class, 'search'])->name('pelanggan.search');
