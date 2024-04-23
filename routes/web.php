<?php

// untuk route ini penting tau
use Illuminate\Support\Facades\Route;

// punya hamdani
use App\Http\Controllers\ControllerLamanAdminBerita;
use App\Http\Controllers\ControllerLamanBerita;
use App\Http\Controllers\ControllerLamanUtama;

// Ferry
use App\Http\Controllers\ControllerLamanBeranda;

// haqi
use App\Http\Controllers\ControllerLamanProduk;

//bagian java
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;


//default route
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return redirect('beranda');
// });

// route buat laman beranda
Route::resource('/', ControllerLamanBeranda::class);

// route buat laman produk
Route::resource('/produk', ControllerLamanProduk::class);

Route::get('/test', function () {
    return view('component.testproduk');
});

// Route::get('/petronitrat.blade.php', function () {
//     return view('petronitrat');
// });

// Route::get('/phonska.blade.php', function () {
//     return view('phonska');
// });

// Route::get('/urea.blade.php', function () {
//     return view('urea');
// });

// Route::get('/za.blade.php', function () {
//     return view('za');
// });

Route::get('/redirect/{page}', 'App\Http\Controllers\RedirectController@redirectToPage')->name('redirect.to.page');




// bagian hamdani
// route test untuk laman utama
Route::resource('/home', ControllerLamanUtama::class);
// route buat laman berita
Route::get('/berita', [ControllerLamanBerita::class,'index'])->name('berita.index');
// laman berita untuk admin berita yang digunakan untuk mengatur data dari tabel beritas
// mulai dari menambah, mengubah, menampilkan, dan menghapus data
// Route::resource('/admin_berita', ControllerLamanAdminBerita::class);

Route::get('/admin_berita', [ControllerLamanAdminBerita::class,'index'])->name('admin_berita.index');

Route::get('/admin_berita/buat_data',[ControllerLamanAdminBerita::class, 'buat_data'])->name('admin_berita.buat_data');

Route::post('/admin_berita/proses_buat_data',[ControllerLamanAdminBerita::class, 'proses_buat_data'])->name('admin_berita.proses_buat_data');

Route::get('/admin_berita/detail_data/{id}',[ControllerLamanAdminBerita::class, 'detail_data'])->name('admin_berita.detail_data');

Route::get('/admin_berita/edit_data/{id}',[ControllerLamanAdminBerita::class, 'edit_data'])->name('admin_berita.edit_data');
Route::put('/admin_berita/proses_edit_data/{id}',[ControllerLamanAdminBerita::class, 'proses_edit_data'])->name('admin_berita.proses_edit_data');

Route::delete('/admin_berita/hapus_data/{id}',[ControllerLamanAdminBerita::class, 'hapus_data'])->name('admin_berita.hapus_data');

//bagian java
Route::get('utility/form', [FormController::class, 'showForm'])->name('formprod');

Route::get('/profile', [DashboardController::class, 'showProfile'])->name('profil');
Route::get('/products', [DashboardController::class, 'showProducts'])->name('produk');
Route::get('/posts', [DashboardController::class, 'showPosts'])->name('postingan');
Route::get('/halaman}', [DashboardController::class, 'showPage'])->name('halaman');

