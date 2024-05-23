<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Models\Berita;
use App\Models\produkmutu;
use Illuminate\Http\RedirectResponse;
use App\Models\ContactUs;
use App\Models\Sipupuk;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ControllerLamanBeranda extends Controller
{
    //
    public function index()
    {
        // untuk mengambil data berita maksimal 4
        $berita = Berita::take(4)->latest()->get();

         // Mengambil semua produk
        $sipupuks = Sipupuk::take(4)->latest()->get();

        $Produk = produkmutu::take(4)->latest()->get();

        // $title = 'Home';

        return view("layouts.laman_beranda", compact('berita', 'sipupuks',));

    }
    public function store(Request $request): RedirectResponse
    {
        // Validate form
        $request->validate([
            'nama'  => 'required',
            'email' => 'required|email',
            'pesan' => 'required'
        ]);

        // Create contact
        ContactUs::create([
            'nama'  => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan
        ]);

        // Redirect to index with success message
        return redirect()->route('beranda')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function adminContactUs(Request $request) : View
    {
        
        $contact = ContactUs::paginate(6); 

        $search = $request->get('search');
		if ($search) {
			$contact = ContactUs::whereAny([ 
				'nama',
				'email',
				'pesan',
			], 'LIKE', "%$search%")->paginate(6); 
		}

        return view('admin.admin_beranda.contactus', compact('contact','request','search'));
    }

    public function destroy($id): RedirectResponse
    {
        // Cari data berdasarkan id dan hapus
        $contact = ContactUs::findOrFail($id);
        $contact->delete();

        // Redirect ke beranda dengan pesan sukses
        return redirect()->route('contactus.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }


}
