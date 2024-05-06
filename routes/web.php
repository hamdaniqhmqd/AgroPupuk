<?php

// untuk route ini penting tau

use Illuminate\Support\Facades\Route;

// punya hamdani
use App\Http\Controllers\ControllerLamanAdminBerita;
use App\Http\Controllers\ControllerLamanBerita;
use App\Http\Controllers\ControllerLamanUtama;
use App\Http\Controllers\AuthController;

// Ferry
use App\Http\Controllers\ControllerLamanBeranda;
use App\Http\Controllers\ControllerLamanTentangKami;
use App\Http\Controllers\ControllerAdminSipupuk;
use App\Http\Controllers\ControllerLamanSipupuk;
use App\Http\Controllers\LoginController;

// haqi
use App\Http\Controllers\ControllerLamanProduk;

//bagian java
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;


//default route
// Route::get('/', function () {
//     return view('welcome');
// });


// route buat laman beranda
Route::get('/', [ControllerLamanBeranda::class, 'index'])->name('beranda');

// route buat laman tentang kami
// Route::get('/tentangkami', function () {
//     return view('layouts.laman_tentangkami');
// })->name('tentangkami');
Route::get('/tentangkami', [ControllerLamanTentangKami::class, 'index'])->name('tentangkami');

// Route::resource('/adminpupuk', \App\Http\Controllers\ControllerAdminSipupuk::class);
Route::resource('/adminsipupuk', \App\Http\Controllers\ControllerAdminSipupuk::class);
Route::post('/sipupuks', [ControllerAdminSipupuk::class, 'store'])->name('sipupuks.store');

Route::resource('/sipupuk', \App\Http\Controllers\ControllerLamanSipupuk::class);
// routes/web.php

// routes/web.php
Route::get('/search', [ControllerLamanSipupuk::class, 'search'])->name('search');

// routes\web.php Login

Route::get('/login', [LoginController::class, 'login'])->name('login');

// route buat laman produk
Route::get('/produk', [ControllerLamanProduk::class, 'index'])->name('produk.index');

Route::get('/test', function () {
    return view('component.testproduk');
});

// hq

Route::get('/listpro/list-produk', function () {
    return view('/listpro/list-produk');
});


Route::get('/petronitrat.blade.php', function () {
    return view('petronitrat');
});



Route::get('/redirect/{page}', 'App\Http\Controllers\RedirectController@redirectToPage')->name('redirect.to.page');




// bagian hamdani
// route test untuk laman utama
// Route::resource('/home', ControllerLamanUtama::class);
// route buat laman berita
Route::get('/berita', [ControllerLamanBerita::class, 'index'])->name('berita.index');
// laman berita untuk admin berita yang digunakan untuk mengatur data dari tabel beritas
// mulai dari menambah, mengubah, menampilkan, dan menghapus data
// Route::resource('/admin_berita', ControllerLamanAdminBerita::class);

// route get buat_data, untuk menampilkan ke laman tambah berita
Route::get('/admin_berita/buat_data', [ControllerLamanAdminBerita::class, 'buat_data'])->name('admin_berita.buat_data');
// route post proses_buat_data, untuk melakukan eksekusi proses tambah data
Route::post('/admin_berita/proses_buat_data', [ControllerLamanAdminBerita::class, 'proses_buat_data'])->name('admin_berita.proses_buat_data');
// route get detail_data, untuk menampilkan ke laman detail data sesuai dengan id
Route::get('/admin_berita/detail_data/{id}', [ControllerLamanAdminBerita::class, 'detail_data'])->name('admin_berita.detail_data');
// route get edit_data, untuk menampilkan ke laman edit data sesuai dengan id
Route::get('/admin_berita/edit_data/{id}', [ControllerLamanAdminBerita::class, 'edit_data'])->name('admin_berita.edit_data');
// route put proses_edit_data, untuk melakukan eksekusi proses edit data sesuai dengan id
Route::put('/admin_berita/proses_edit_data/{id}', [ControllerLamanAdminBerita::class, 'proses_edit_data'])->name('admin_berita.proses_edit_data');
// route delete hapus_data, untuk melakukan eksekusi proses hapus data sesuai dengan id
Route::delete('/admin_berita/hapus_data/{id}', [ControllerLamanAdminBerita::class, 'hapus_data'])->name('admin_berita.hapus_data');
// route get pengunjung, untuk menambahkan jumlah pengunjung dan di arahkan link yang dituju
Route::get('/pengunjung/{id}', [ControllerLamanAdminBerita::class, 'pengunjung'])->name('admin_berita.pengunjung');

Route::get('/login', [AuthController::class, 'login']);
Route::post('/process_login', [AuthController::class, 'process_login']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/process_register', [AuthController::class, 'process_register']);

Route::group(['middleware' => 'admin'], function () {
    // route get index, untuk menampilkan data berita di laman admin berita
    Route::get('/admin/berita', [ControllerLamanAdminBerita::class, 'index'])->name('admin_berita.index');
});


Route::get('/forget', [AuthController::class, 'forget']);

// Route::get('/logout', [AuthController::class, 'logout']);

//bagian java
Route::get('utility/form', [FormController::class, 'showForm'])->name('formprod');

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::get('/profile', [DashboardController::class, 'showProfile'])->name('profil');
Route::get('/products', [DashboardController::class, 'showProducts'])->name('produk');
Route::get('/posts', [DashboardController::class, 'showPosts'])->name('postingan');
Route::get('/halaman}', [DashboardController::class, 'showPage'])->name('halaman');
