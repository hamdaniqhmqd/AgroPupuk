<?php

use App\Http\Controllers\ControllerLamanAdminBerita;
use App\Http\Controllers\ControllerLamanBerita;
use App\Http\Controllers\ControllerLamanUtama;
use App\Http\Controllers\ControllerLamanBeranda;
use Illuminate\Support\Facades\Route;

//bagian java
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/home', ControllerLamanUtama::class);

Route::resource('/beranda', ControllerLamanBeranda::class);

Route::get('/berita', [ControllerLamanBerita::class,'index'])->name('berita.index');

Route::resource('/admin_berita', ControllerLamanAdminBerita::class);

//bagian java
Route::get('utility/form', [FormController::class, 'showForm'])->name('formprod');

Route::get('/profile', [DashboardController::class, 'showProfile'])->name('profil');
Route::get('/products', [DashboardController::class, 'showProducts'])->name('produk');
Route::get('/posts', [DashboardController::class, 'showPosts'])->name('postingan');
Route::get('/halaman}', [DashboardController::class, 'showPage'])->name('halaman');
