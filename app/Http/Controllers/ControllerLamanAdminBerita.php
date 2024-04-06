<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ControllerLamanAdminBerita extends Controller
{
  public function index(Request $request): View
  {
    // variabel untuk mengambil data dari tabel beritas
    // sebannyak 10 data per tab
    $berita = Berita::paginate(10);
    $title = 'Berita';

    // variabel untuk melakukan pencarian
    $search = $request->get('search');
    // if jika ada data dari variabel $search maka mengeluarkan data pencarian
    if ($search) {
      $berita = Berita::whereAny([ // pencarian berdasarkan id name description link
        'id',
        'name',
        'description',
        'link',
      ], 'LIKE', "%$search%")->paginate(10); // untuk menampilkan 10 data per tab
    }

    // untuk mengarahkan ke laman admin berita
    return view('admin_berita.index', compact('berita', 'title', 'request'));
  }

  public function create(): View
  {
    // untuk mengarahkan ke laman tambah berita
    return view('admin_berita.create');
  }

  public function store(Request $request): RedirectResponse
  {
    // untuk validasi data yang masuk sesuai data tidak
    $request->validate([
      'image'       => 'required|image|mimes:jpeg,jpg,png|max:2048',
      'name'        => 'required',
      'description' => 'required',
      'link'        => 'required',
    ]);

    // untuk mendapatkan file image dan merubah nama 
    // beserta menyimpannya ke local storage
    $image = $request->file('image');
    // digunakan untuk mengubah nama gambar menjadi inputan name
    $nameImage = Carbon::now()->format('Y-m-d_H-i-s_') . $request->input('name') . '.' . $image->getClientOriginalExtension();
    // untuk memasukkan data gambar yang sudah di ubah namanya ke local storage
    $image->storeAs('public/gambar berita', $nameImage);

    // untuk mengatur id pada setiap data sesuai dengan
    // tanggal, waktu saat d tambahkan
    $id = Carbon::now()->format('YmdHis');

    // untuk membuat berita baru
    Berita::create([
      'id'          => $id,
      'image'       => $nameImage,
      'name'        => $request->name,
      'description' => $request->description,
      'link'        => $request->link,
    ]);

    // untuk mengarahkan ke laman admin berita
    return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Disimpan!']);
  }

  // untuk menghapus data sesuai dengan id
  public function destroy($id): RedirectResponse
  {
    // untuk mencari dara berita sesuai dengan id nya
    $berita = Berita::findOrFail($id);

    // untuk menghapus gambar yang berada di penyimpanan local
    Storage::delete('public/gambar berita/' . $berita->image);

    // untuk menghapus semua data sesuai id
    $berita->delete();

    // untuk mengarahakan ke laman admin berita
    return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
  }

  public function show(string $id): View
  {
    //mendapatkan data berita sesuai dengan id
    $berita = Berita::findOrFail($id);

    //menampilkan view dari detail berita
    return view('admin_berita.show', compact('berita'));
  }

  public function edit(string $id): View
  {
    // untuk mendapatkan data berita sesuai dengan id
    $berita = Berita::findOrFail($id);

    // untuk mengarahkan ke laman edit seusai dengan id
    return view('admin_berita.edit', compact('berita'));
  }

  public function update(Request $request, $id): RedirectResponse
  {
    // untuk validasi data yang masuk apakah sesuai atau tidak
    // nullable boleh kosong // required wajib di isi
    $request->validate([
      'image'       => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
      'name'        => 'required',
      'description' => 'required',
      'link'        => 'required',
    ]);

    // untuk mendapatkan data berita sesuai dengan id
    $berita = Berita::findOrFail($id);

    // perulangan if
    // untuk mengecek apakah ada data image yang masuk, jika iya data akan di eksekusi
    if ($request->hasFile('image')) {

      // untuk mengirim atau mengupload data image baru
      $image = $request->file('image');

      // digunakan untuk mengubah nama gambar menjadi inputan name
      $nameImage = Carbon::now()->format('Y-m-d_H-i-s_') . $request->input('name') . '.' . $image->getClientOriginalExtension();

      // untuk memasukkan data gambar yang sudah di ubah namanya ke local storage
      $image->storeAs('public/gambar berita', $nameImage);

      // untuk menghapus image lama
      Storage::delete('public/gambar berita/' . $berita->image);

      // untuk update data sesuai data yang masuk
      $berita->update([
        'image'         => $nameImage,
        'name'          => $request->name,
        'description'   => $request->description,
        'link'          => $request->link,
      ]);
    } else {

      // jika data image tidak di masukkan maka data image tidak akan di perbarui
      $berita->update([
        'name'          => $request->name,
        'description'   => $request->description,
        'link'          => $request->link,
      ]);
    }

    // mengarahkan ke laman admin berita dan memberikan sebuah
    return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Diubah!']);
  }
}
