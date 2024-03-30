<?php

use App\Http\Controllers\ControllerLamanAdminBerita;
use App\Http\Controllers\ControllerLamanBerita;
use App\Http\Controllers\ControllerLamanUtama;
use App\Http\Controllers\ControllerLamanBeranda;
use Illuminate\Support\Facades\Route;

// khusus laman beranda
Route::get('/', function () {
    return view('beranda.index');
});


Route::resource('/home', ControllerLamanUtama::class);

Route::resource('/beranda', ControllerLamanBeranda::class);

Route::get('/berita', [ControllerLamanBerita::class,'index'])->name('berita.index');

// laman berita untuk admin
Route::resource('/admin_berita', ControllerLamanAdminBerita::class);
