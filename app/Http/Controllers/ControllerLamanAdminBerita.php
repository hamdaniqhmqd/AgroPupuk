<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ControllerLamanAdminBerita extends Controller
{
  public function index(): View
  {
    $berita = Berita::paginate(10);

    return view('admin_berita.index', compact('berita'));
  }

  public function create(): View
  {
    return view('admin_berita.create');
  }

  public function store(Request $request): RedirectResponse
  {
    //validate form
    $request->validate([
      'image'       => 'required|image|mimes:jpeg,jpg,png|max:2048',
      'name'        => 'required',
      'description' => 'required',
      'link'        => 'required',
    ]);

    //upload image
    // $image = $request->file('image');
    // $image->storeAs('public/gambar berita', $image->hashName());
    $image = $request->file('image');
    $namaFile = $request->input('name'); // Mengambil nilai dari input 'nama' pada formulir

    // Menyimpan file gambar dengan nama berdasarkan data nama dari formulir
    $image->storeAs('public/gambar berita', $namaFile . '.' . $image->getClientOriginalExtension());
    $nama_image = $image;

    //create product
    Berita::create([
      'image'      => $nama_image,
      'name'       => $request->name,
      'description' => $request->description,
      'link'       => $request->link,
    ]);

    //redirect to index
    return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Disimpan!']);
  }

  public function destroy($id): RedirectResponse
  {
    $berita = Berita::findOrFail($id);

    Storage::delete('public/gambar berita/' . $berita->image);

    $berita->delete();

    return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }

  public function show(string $id): View
  {
    //mendapatkan data berita sesuai dengan id
    $berita = Berita::findOrFail($id);

    //menampilkan view dari detail berita
    return view('admin_berita.show', compact('berita'));
  }
}
