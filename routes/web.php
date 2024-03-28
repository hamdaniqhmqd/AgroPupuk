<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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