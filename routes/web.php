<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\LokasiBarangController;
use App\Http\Controllers\MerkBarangController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\KategoriRuanganController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StatusBarangController;
use App\Http\Controllers\ServisBarangController;
use App\Http\Controllers\NonaktifBarangController;
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

Route::get('/editroles', function () {
    return view('users.editroles');
});

Route::get('/editusers', function () {
    return view('users.edit');
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


//add
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

//edit
Route::get('/editbarang', function () {
    return view('barangs.editbarang');
});

Route::get('/editservis', function () {
    return view('barangs.editservisbarang');
});

Route::get('/editnonaktif', function () {
    return view('barangs.editnonaktifbarang');
});

Route::get('/editstatus', function () {
    return view('barangs.editstatusbarang');
});

Route::get('/editkatbarang', function () {
    return view('barangs.editkatbarang');
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


//add
Route::get('/addruangan', function () {
    return view('ruangan.add');
});

Route::get('/addkatruangan', function () {
    return view('ruangan.addkatruangan');
});

Route::get('/addgedung', function () {
    return view('ruangan.addgedung');
});

//edit
Route::get('/editruangan', function () {
    return view('ruangan.edit');
});

Route::get('/editkatruangan', function () {
    return view('ruangan.editkatruangan');
});

Route::get('/editgedung', function () {
    return view('ruangan.editgedung');
});

// Departemen

Route::get('/departemen', function () {
    return view('departemen.index');
});

Route::get('/adddepartemen', function () {
    return view('departemen.add');
});

Route::get('/editdepartemen', function () {
    return view('departemen.edit');
});


// Tambahan untuk halaman requestor

Route::get('/userpeminjamanbarang', function () {
    return view('barangs.userpeminjamanbarang');
});

Route::get('/userpeminjamanruangan', function () {
    return view('ruangan.userpeminjamanruangan');
});

Route::get('/statuspeminjamanbarang', function () {
    return view('barangs.statuspeminjamanbarang');
});

Route::get('/statuspeminjamanruangan', function () {
    return view('ruangan.statuspeminjamanruangan');
});

//CRUD
//barang
Route::resource('barang', BarangController::class);
Route::resource('kategoribarang', KategoriBarangController::class);
Route::resource('lokasibarang', LokasiBarangController::class);
Route::resource('merkbarang', MerkBarangController::class);
Route::resource('statusbarang', StatusBarangController::class);
Route::resource('servis', ServisBarangController::class);
Route::resource('nonaktif', NonaktifBarangController::class);

//ruangan
Route::resource('ruangan', RuanganController::class);
Route::resource('kategoriruangan', KategoriRuanganController::class);
Route::resource('gedung', GedungController::class);

Route::resource('departemen', DepartemenController::class);

//user
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

//Cetak Data
Route::get('/cetak_departemen',[DepartemenController::class, 'cetak_departemen'])->name('cetak_departemen');
Route::get('/cetak_kategruangan',[KategoriRuanganController::class, 'cetak_kategruangan'])->name('cetak_kategruangan');
Route::get('/cetak_gudang',[GedungController::class, 'cetak_gudang'])->name('cetak_gudang');
Route::get('/cetak_jabatan',[RoleController::class, 'cetak_jabatan'])->name('cetak_jabatan');
Route::get('/cetak_ruangan',[RuanganController::class, 'cetak_ruangan'])->name('cetak_ruangan');
Route::get('/cetak_barang',[BarangController::class, 'cetak_barang'])->name('cetak_barang');
Route::get('/cetak_kategbarang',[KategoriBarangController::class, 'cetak_kategbarang'])->name('cetak_kategbarang');
Route::get('/cetak_lokasibarang',[LokasiBarangController::class, 'cetak_lokasibarang'])->name('cetak_lokasibarang');