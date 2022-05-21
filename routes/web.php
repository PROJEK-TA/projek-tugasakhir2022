<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\KategoriRuanganController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\RegisterController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('layouts.index');
    });
});

Route::post('/reg', [UserController::class, 'register'])->name('user.register');


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

Route::get('/adduser', function () {
    return view('users.add');
});

Route::get('/addroles', function () {
    return view('users.addroles');
});

// Route::get('/login', function () {
//     return view('users.login');
// });

// Route::get('/register', function () {
//     return view('users.register');
// });
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

Route::get('/servis', function () {
    return view('barangs.servis');
});

Route::get('/nonaktif', function () {
    return view('barangs.nonaktif');
});

Route::get('/addbarang', function () {
    return view('barangs.addbarang');
});

Route::get('/addservis', function () {
    return view('barangs.addservis');
});

Route::get('/addnonaktif', function () {
    return view('barangs.addnonaktif');
});

Route::get('/addstatus', function () {
    return view('barangs.addstatus');
});

Route::get('/addkatbarang', function () {
    return view('barangs.addkatbarang');
});

// Ruangan

Route::get('/ruangan', function () {
    return view('ruangan.index');
});

Route::get('/katruangan', function () {
    return view('ruangan.kategoriruangan');
});

Route::get('/gedung', function () {
    return view('ruangan.gedung');
});

Route::get('/peminjamanruangan', function () {
    return view('ruangan.peminjamanruangan');
});

Route::get('/addruangan', function () {
    return view('ruangan.add');
});

Route::get('/addkatruangan', function () {
    return view('ruangan.addkatruangan');
});

Route::get('/addgedung', function () {
    return view('ruangan.addgedung');
});

// Departemen

Route::get('/departemen', function () {
    return view('departemen.index');
});

Route::get('/adddepartemen', function () {
    return view('departemen.add');
});


// Tambahan untuk halaman user

Route::get('/userpeminjamanbarang', function () {
    return view('barangs.userpeminjamanbarang');
});

Route::get('/userpeminjamanruangan', function () {
    return view('ruangan.userpeminjamanruangan');
});

Route::resource('barang', BarangController::class);
Route::resource('kategoribarang', KategoriBarangController::class);

Route::resource('ruangan', RuanganController::class);
Route::resource('kategoriruangan', KategoriRuanganController::class);
Route::resource('gedung', GedungController::class);

Route::resource('departemen', DepartemenController::class);

Route::resource('user', UserController::class);
Route::resource('roleuser', RoleController::class);
Route::resource('kelolausers', KelolaUserController::class);
Route::resource('register', RegisterController::class);
// Route::resource('login', LoginController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
