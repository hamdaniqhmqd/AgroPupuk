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
    $image = $request->file('image');
    $image->storeAs('public/gambar berita', $image->hashName());

    //create product
    Berita::create([
      'image'      => $image->hashName(),
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

        Storage::delete('public/gambar berita/'. $berita->image);

        $berita->delete();

        return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
