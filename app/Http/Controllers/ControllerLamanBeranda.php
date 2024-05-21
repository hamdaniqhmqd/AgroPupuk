<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Models\Berita;
use App\Models\Sipupuk;
use Illuminate\Http\Request;

class ControllerLamanBeranda extends Controller
{
    //
    public function index()
    {
        // untuk mengambil data berita maksimal 4
        $berita = Berita::take(4)->latest()->get();

         // Mengambil semua produk
        $sipupuks = Sipupuk::take(4)->latest()->get();

        // $title = 'Home';

        return view("layouts.laman_beranda", compact('berita', 'sipupuks',));
    }
}
