<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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
    return view('layouts.index');
});

// User

Route::get('/user', function () {
    return view('users.index');
});

Route::get('/roles', function () {
    return view('users.roles');
});

Route::get('/kelolausers', function () {
    return view('users.kelolausers');
});

// Barang

Route::get('/barang', function () {
    return view('barangs.index');
});

Route::get('/katbarang', function () {
    return view('barangs.kategoribarang');
});

Route::get('/statusbarang', function () {
    return view('barangs.statusbarang');
});

Route::get('/peminjamanbarang', function () {
    return view('barangs.peminjamanbarang');
});

// Ruangan

Route::get('/ruangan', function () {
    return view('ruangan.index');
});

Route::get('/kategori', function () {
    return view('ruangan.kategori');
});

Route::get('/gedung', function () {
    return view('ruangan.gedung');
});

Route::get('/peminjaman', function () {
    return view('ruangan.peminjaman');
});

Route::get('/tambahruangan', function () {
    return view('ruangan.add');
});

Route::get('/tambahkategori', function () {
    return view('ruangan.addkategori');
});

// Departemen

Route::get('/departemen', function () {
    return view('departemen.index');
});

Route::get('/tambahdepartemen', function () {
    return view('departemen.add');
});

// Route::resource('barang',BarangController::class);
