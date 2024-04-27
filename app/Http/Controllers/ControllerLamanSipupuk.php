<?php

namespace App\Http\Controllers;

use App\Models\Sipupuk;

use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class ControllerLamanSipupuk extends Controller
{
    //
    public function index( Request $request) : View
    {
        //mengambil semua produk
        $sipupuks = Sipupuk::latest()->paginate(6);

        //menampilkan view dengan produk
        return view('layouts.laman_sipupuk', compact('sipupuks'));

    }

    public function search(Request $request) : View
    {
        $query = $request->get('search');

        if ($query) {
            // Jika terdapat query pencarian
            $sipupuks = Sipupuk::where('title', 'like', '%' . $query . '%')->latest()->paginate(6);
        } else {
            // Jika tidak ada query pencarian
            $sipupuks = Sipupuk::latest()->paginate(6);
        }

        return view('layouts.laman_search_sipupuk',['kunci' => $query], compact('sipupuks' ,'query'));
    }

    public function show($id)
    {
        // Cari artikel berdasarkan ID
        $sipupuks = Sipupuk::findOrFail($id);

        // Tampilkan view artikel dengan data artikel yang ditemukan
        return view('layouts.laman_artikel_sipupuk', compact('sipupuks'));
    }

}

