<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;

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
//     return view('backend.dashboard');
// });

Auth::routes();

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
//kategori
Route::get('/daftarkategori', [CategoryController::class, 'index'])->name('daftarkategori');
Route::post('/tambahdata', [CategoryController::class, 'tambahdata'])->name('tambahdata');
Route::get('/tampilkategori/{id_kategori}', [CategoryController::class, 'tampilkategori'])->name('tampilkategori');
Route::post('/updatekategori/{id_kategori}', [CategoryController::class, 'updatekategori'])->name('updatekategori');
Route::get('/hapuskategori/{id_kategori}', [CategoryController::class, 'hapuskategori'])->name('hapuskategori');

// produk
Route::get('/daftarproduk', [ProdukController::class, 'index'])->name('daftarproduk');
Route::post('/tambahproduk', [ProdukController::class, 'tambahproduk'])->name('tambahproduk');
Route::get('/tampilproduk/{id_produk}', [ProdukController::class, 'tampilproduk'])->name('tampilproduk');
Route::post('/updateproduk/{id_produk}', [ProdukController::class, 'updateproduk'])->name('updateproduk');
Route::get('/hapusproduk/{id_produk}', [ProdukController::class, 'hapusproduk'])->name('hapusproduk');

// transaksi
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
