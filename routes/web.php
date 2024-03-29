<?php

use App\Http\Controllers\ControllerLamanAdminBerita;
use App\Http\Controllers\ControllerLamanBerita;
use App\Http\Controllers\ControllerLamanUtama;
use App\Http\Controllers\ControllerLamanBeranda;
use Illuminate\Support\Facades\Route;

 tampilan_dashboard
//bagian java
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

// khusus laman beranda
 main
Route::get('/', function () {
    return view('beranda.index');
});

Route::get('/list-produk', function () {
    return view('list-produk');
});

Route::get('/petronitrat.blade.php', function () {
    return view('petronitrat');
});

Route::get('/phonska.blade.php', function () {
    return view('phonska');
});

Route::get('/urea.blade.php', function () {
    return view('urea');
});

Route::get('/za.blade.php', function () {
    return view('za');
});

Route::get('/redirect/{page}', 'App\Http\Controllers\RedirectController@redirectToPage')->name('redirect.to.page');

Route::resource('/home', ControllerLamanUtama::class);

Route::resource('/beranda', ControllerLamanBeranda::class);

Route::get('/berita', [ControllerLamanBerita::class,'index'])->name('berita.index');

Route::resource('/admin_berita', ControllerLamanAdminBerita::class);

 tampilan_dashboard
//bagian java
Route::get('utility/form', [FormController::class, 'showForm'])->name('formprod');

Route::get('/profile', [DashboardController::class, 'showProfile'])->name('profil');
Route::get('/products', [DashboardController::class, 'showProducts'])->name('produk');
Route::get('/posts', [DashboardController::class, 'showPosts'])->name('postingan');
Route::get('/halaman}', [DashboardController::class, 'showPage'])->name('halaman');

 main
