<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ControllerLamanUtama extends Controller
{
  public function index() : View
  {
      $berita = Berita::take(4)->get();
      $title = 'Home';

      return view('beranda.index', compact('berita', 'title'));
  }
}
