<?php

use App\Http\Controllers\ControllerLamanAdminBerita;
use App\Http\Controllers\ControllerLamanBerita;
use App\Http\Controllers\ControllerLamanUtama;
use App\Http\Controllers\ControllerLamanBeranda;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

