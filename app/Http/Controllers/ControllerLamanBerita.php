<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ControllerLamanBerita extends Controller
{
  public function index(Request $request) : View
  {
      $berita = Berita::latest()->paginate(6);
      $beritaSide = Berita::take(5)->latest()->get();
      $title = 'Berita';

      $search = $request->get('search');
        if ($search) {
            $berita = Berita::whereAny(['title'], 'LIKE', "%$search%")->paginate(6);
        }

      return view('berita.berita_laman_berita', compact('berita', 'request', 'beritaSide', 'title'));
  }
}
