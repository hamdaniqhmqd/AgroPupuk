<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ControllerLamanUtama extends Controller
{
  public function index(): View
  {
    // untuk mengambil data berita maksimal 4
    $berita = Berita::take(4)->get();
    $title = 'Home';

    // mengarahkan ke laman utama
    return view('beranda.index', compact('berita', 'title'));
  }
}
