<?php

use Illuminate\Support\Facades\Route;

});

Route::get('/list_produk', function () {
    return view('list-produk');
});

Route::get('/petronitrat', function () {
    return view('petronitrat');
});

Route::get('/phonska', function () {
    return view('phonska');
});

Route::get('/urea', function () {
    return view('urea');
});

Route::get('/za', function () {
    return view('za');
});
