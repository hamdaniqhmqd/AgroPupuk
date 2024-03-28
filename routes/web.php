<?php

use App\Http\Controllers\ControllerLamanAdminBerita;
use App\Http\Controllers\ControllerLamanBerita;
use App\Http\Controllers\ControllerLamanUtama;
use App\Http\Controllers\ControllerLamanBeranda;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/home', ControllerLamanUtama::class);

Route::resource('/beranda', ControllerLamanBeranda::class);

Route::get('/berita', [ControllerLamanBerita::class,'index'])->name('berita.index');

Route::resource('/admin_berita', ControllerLamanAdminBerita::class);
