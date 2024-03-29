<?php

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
