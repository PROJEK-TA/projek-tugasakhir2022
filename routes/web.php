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

Route::get('/user', function () {
    return view('users.index');
});
Route::get('/barang', function () {
    return view('barangs.index');
});

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

Route::resource('barang',BarangController::class);
