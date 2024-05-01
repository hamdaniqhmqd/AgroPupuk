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
        // sebanyak 10 data per tab
        $berita = Berita::latest()->paginate(10);
        $title = 'Admin Berita';

        // variabel untuk melakukan pencarian
        $search = $request->get('pencarian');
        // if jika ada data dari variabel $search maka mengeluarkan data pencarian
        if ($search) {
            $berita = Berita::whereAny([ // pencarian berdasarkan data dibawah
                // 'id',
                'nama_berita',
                'deskripsi_berita',
                'link_berita',
            ], 'LIKE', "%$search%")->paginate(10); // untuk menampilkan 10 data per tab
        }

        // untuk mengarahkan ke laman admin berita
        return view('admin.admin_berita.index', compact('berita', 'title', 'request'));
    }

    public function buat_data(): View
    {
        // untuk mengarahkan ke laman tambah berita
        return view('admin.admin_berita.create');
    }

    public function proses_buat_data(Request $request): RedirectResponse
    {
        // untuk validasi data yang masuk sesuai data tidak
        $request->validate([
            'gambar_berita'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_berita'       => 'required',
            'deskripsi_berita'  => 'required',
            'link_berita'       => 'required',
        ]);

        // untuk mendapatkan file image dan merubah nama
        $image = $request->file('gambar_berita');
        // digunakan untuk mengubah nama gambar menjadi inputan name
        // dan tanggal saat itu beserta menyimpannya ke local storage
        $nameImage = Carbon::now()->format('Y-m-d_H-i-s_') .
            $request->input('nama_berita') . '.' . $image->getClientOriginalExtension();
        // untuk memasukkan data gambar yang sudah di ubah namanya ke local storage
        $image->storeAs('public/gambar berita', $nameImage);

        // untuk mengatur id pada setiap data sesuai dengan
        // tanggal, waktu saat d tambahkan
        $id = Carbon::now()->format('YmdHis');

        // untuk membuat berita baru
        Berita::create([
            'id'                    => $id,
            'gambar_berita'         => $nameImage,
            'nama_berita'           => $request->nama_berita,
            'deskripsi_berita'      => $request->deskripsi_berita,
            'link_berita'           => $request->link_berita,
            // 'id_admin',
            // 'pengunjung_berita',
        ]);

        // untuk mengarahkan ke laman admin berita
        return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // untuk menghapus data sesuai dengan id
    public function hapus_data($id): RedirectResponse
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

    public function detail_data(string $id): View
    {
        // untuk mendapatkan data berita sesuai dengan id
        $berita = Berita::findOrFail($id);

        // untuk mengarahkan ke laman edit seusai dengan id
        return view('admin.admin_berita.show', compact('berita'));
    }

    public function edit_data(string $id): View
    {
        // untuk mendapatkan data berita sesuai dengan id
        $berita = Berita::findOrFail($id);

        // untuk mengarahkan ke laman edit seusai dengan id
        return view('admin.admin_berita.edit', compact('berita'));
    }

    public function proses_edit_data(Request $request, $id): RedirectResponse
    {
        // untuk validasi data yang masuk apakah sesuai atau tidak
        // nullable boleh kosong // required wajib di isi
        $request->validate([
            'gambar_berita'      => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'nama_berita'        => 'required',
            'deskripsi_berita'   => 'required',
            'link_berita'        => 'required',
        ]);

        // untuk mendapatkan data berita sesuai dengan id
        $berita = Berita::findOrFail($id);

        // perulangan if
        // untuk mengecek apakah ada data image yang masuk, jika iya data akan di eksekusi
        if ($request->hasFile('gambar_berita')) {

            // untuk mengirim atau mengupload data image baru
            $image = $request->file('gambar_berita');

            // digunakan untuk mengubah nama gambar menjadi inputan name
            $nameImage = Carbon::now()->format('Y-m-d_H-i-s_') . $request->input('nama_berita') .
                '.' . $image->getClientOriginalExtension();

            // untuk memasukkan data gambar yang sudah di ubah namanya ke local storage
            $image->storeAs('public/gambar berita', $nameImage);

            // untuk menghapus image lama
            Storage::delete('public/gambar berita/' . $berita-> image);

            // untuk update data sesuai data yang masuk
            $berita->update([
                'gambar_berita'         => $nameImage,
                'nama_berita'           => $request->nama_berita,
                'deskripsi_berita'      => $request->deskripsi_berita,
                'link_berita'           => $request->link_berita,
            ]);
        } else {

            // jika data image tidak di masukkan maka data image tidak akan di perbarui
            $berita->update([
                'nama_berita'           => $request->nama_berita,
                'deskripsi_berita'      => $request->deskripsi_berita,
                'link_berita'           => $request->link_berita,
            ]);
        }

        // mengarahkan ke laman admin berita dan memberikan sebuah pesan
        return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function pengunjung($id)
    {
        // untuk mengambil data sesuai id dari data berita
        $page = Berita::findOrFail($id);
        // menambahkan 1 data ke kolom pengunjung berita
        $page->increment('pengunjung_berita');
        // jika berita di klik akan diarahkan ke link
        return redirect($page->link_berita);
    }
}
