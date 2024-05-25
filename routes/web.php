<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\pemasukanController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\pembelianController;
use App\Http\Controllers\suplierController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/pegawai', [pegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/tambah', [pegawaiController::class, 'create']);
Route::post('/pegawai/store', [pegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/edit/{id}', [pegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/update/{id}', [pegawaiController::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/hapus/{id}', [pegawaiController::class, 'delete']);
Route::get('/pegawai/destroy/{id}', [pegawaiController::class, 'destroy']);

Route::get('/barang', [barangController::class, 'index'])->name('barang.index');
Route::get('/barang/tambah', [barangController::class, 'create']);
Route::post('/barang/store', [barangController::class, 'store'])->name('barang.store');
Route::get('/barang/edit/{id}', [barangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/update/{id}', [barangController::class, 'update'])->name('barang.update');
Route::get('/barang/hapus/{id}', [barangController::class, 'delete']);
Route::get('/barang/destroy/{id}', [barangController::class, 'destroy']);

Route::get('/suplier', [suplierController::class, 'index'])->name('suplier.index');
Route::get('/suplier/tambah', [suplierController::class, 'create']);
Route::post('/suplier/store', [suplierController::class, 'store'])->name('suplier.store');
Route::get('/suplier/edit/{id}', [suplierController::class, 'edit'])->name('suplier.edit');
Route::put('/suplier/update/{id}', [suplierController::class, 'update'])->name('suplier.update');
Route::get('/suplier/hapus/{id}', [suplierController::class, 'delete']);
Route::get('/suplier/destroy/{id}', [suplierController::class, 'destroy']);


Route::get('/customer', [customerController::class, 'index'])->name('customer.index');
Route::get('/customer/tambah', [customerController::class, 'create']);
Route::post('/customer/store', [customerController::class, 'store'])->name('customer.store');
Route::get('/customer/edit/{id}', [customerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/update/{id}', [customerController::class, 'update'])->name('customer.update');
Route::get('/customer/hapus/{id}', [customerController::class, 'delete']);
Route::get('/customer/destroy/{id}', [customerController::class, 'destroy']);


Route::get('/pemasukan', [pemasukanController::class, 'index'])->name('pemasukan.index');
Route::get('/pemasukan/tambah', [pemasukanController::class, 'create']);
Route::post('/pemasukan/store', [pemasukanController::class, 'store'])->name('pemasukan.store');
Route::get('/pemasukan/edit/{id}', [pemasukanController::class, 'edit'])->name('pemasukan.edit');
Route::put('/pemasukan/update/{id}', [pemasukanController::class, 'update'])->name('pemasukan.update');
Route::get('/pemasukan/hapus/{id}', [pemasukanController::class, 'delete']);
Route::get('/pemasukan/destroy/{id}', [pemasukanController::class, 'destroy']);


Route::get('/pembelian', [pembelianController::class, 'index'])->name('pembelian.index');
Route::get('/pembelian/tambah', [pembelianController::class, 'create']);
Route::post('/pembelian/store', [pembelianController::class, 'store'])->name('pembelian.store');
Route::get('/pembelian/edit/{id}', [pembelianController::class, 'edit'])->name('pembelian.edit');
Route::put('/pembelian/update/{id}', [pembelianController::class, 'update'])->name('pembelian.update');
Route::get('/pembelian/hapus/{id}', [pembelianController::class, 'delete']);
Route::get('/pembelian/destroy/{id}', [pembelianController::class, 'destroy']);

Route::get('/penjualan', [penjualanController::class, 'index'])->name('penjualan.index');
Route::get('/penjualan/tambah', [penjualanController::class, 'create']);
Route::post('/penjualan/store', [penjualanController::class, 'store'])->name('penjualan.store');
Route::get('/penjualan/edit/{id}', [penjualanController::class, 'edit'])->name('penjualan.edit');
Route::put('/penjualan/update/{id}', [penjualanController::class, 'update'])->name('penjualan.update');
Route::get('/penjualan/hapus/{id}', [penjualanController::class, 'delete']);
Route::get('/penjualan/destroy/{id}', [penjualanController::class, 'destroy']);

