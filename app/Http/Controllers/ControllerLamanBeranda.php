<?php

namespace App\Http\Controllers;

use App\Models\beranda_corosel;
use App\Models\Berita;
use App\Models\produkmutu;
use Illuminate\Http\RedirectResponse;
use App\Models\ContactUs;
use App\Models\Sipupuk;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function adminBeranda(Request $request) : View
    {
        $admin = User::find(Auth::id());
        $title = 'Beranda | ADMIN';

        $contact = ContactUs::paginate(6);

        $corosel = beranda_corosel::take(3)->get();

        $search = $request->get('search');
		if ($search) {
			$contact = ContactUs::whereAny([
				'nama',
				'email',
				'pesan',
			], 'LIKE', "%$search%")->paginate(6);
		}

        return view('admin.admin_beranda.contactus', compact('contact','request','search', 'corosel','admin','title'));
    }

    public function destroy($id): RedirectResponse
    {
        // Cari data berdasarkan id dan hapus
        $contact = ContactUs::findOrFail($id);
        $contact->delete();

        // Redirect ke beranda dengan pesan sukses
        return redirect()->route('contactus.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }

    public function proses_edit(Request $request,$id) : RedirectResponse
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg|max:9000',
        ]);
        $gambar = $request->file('gambar');

        $beranda = beranda_corosel::find($id);

        Storage::disk('public')->delete('/gambar corosel/' . $beranda->gambar);

        $nama_gambar = $beranda->title . '.' . $gambar->getClientOriginalExtension();

        $gambar->storeAs('gambar corosel', $nama_gambar, 'public');

        $beranda->update([
            'image' => $nama_gambar
        ]);
        // dd($request->all());
        return Redirect()->route('admin_beranda.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }
}
