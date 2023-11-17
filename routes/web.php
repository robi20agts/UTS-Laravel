<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/produk', function () {
    $kode_produk = ['BRG001', 'BRG002'];
    $nama_produk = ['Pena', 'Buku'];
    $jenis_produk = ['Alat Tulis', 'Alat Tulis'];
    $harga = [20000, 15000];
    $jumlah = count($harga);
    return view('produk', compact('harga', 'jumlah', 'nama_produk', 'kode_produk', 'jenis_produk'));
});

Route::get('/form', function () {
    $jenis_produk = ['Pilih Produk', 'Alat Tulis', 'Elektronik', 'Sembako'];
    $jumlah = count($jenis_produk);
    return view('form', compact('jumlah', 'jenis_produk'));
});