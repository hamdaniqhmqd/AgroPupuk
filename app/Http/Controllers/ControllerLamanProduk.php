<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLamanProduk extends Controller
{
    //
    public function index()
    {
        // untuk menampilkan halaman produk
        return view('layouts.laman_produk');
    }
    public function test()
    {
        // untuk menampilkan halaman produk
        return view('component.testproduk');
    }


}
