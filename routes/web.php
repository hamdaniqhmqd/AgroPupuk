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

// route default
Route::get('/', function () {
    return view('welcome');
});

// route buat laman beranda
Route::resource('/beranda', ControllerLamanBeranda::class);

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
// laman berita untuk admin
Route::resource('/admin_berita', ControllerLamanAdminBerita::class);

//bagian java
Route::get('utility/form', [FormController::class, 'showForm'])->name('formprod');

Route::get('/profile', [DashboardController::class, 'showProfile'])->name('profil');
Route::get('/products', [DashboardController::class, 'showProducts'])->name('produk');
Route::get('/posts', [DashboardController::class, 'showPosts'])->name('postingan');
Route::get('/halaman}', [DashboardController::class, 'showPage'])->name('halaman');

