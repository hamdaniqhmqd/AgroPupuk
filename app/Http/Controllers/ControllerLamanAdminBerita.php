<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\SessionLog;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ControllerLamanAdminBerita extends Controller
{
    public function index(Request $request): View
    {
        // Variabel untuk mengambil data dari tabel beritas
        // sebanyak 10 data per tab
        $berita = Berita::with('user')->latest()->paginate(10);

        $data['admin'] = User::find(Auth::user()->id);
        $title = 'Berita';
        $totalBerita = Berita::count();
        $totalPengunjung = Berita::sum('pengunjung_berita');

        // Variabel untuk melakukan pencarian
        $search = $request->get('pencarian');

        // If jika ada data dari variabel $search maka mengeluarkan data pencarian
        if ($search) {
            $berita = Berita::whereAny([ // Pencarian berdasarkan data dibawah
                'judul_berita',
                'deskripsi_berita',
                'link_berita',
            ], 'LIKE', "%$search%")->paginate(10); // Untuk menampilkan 10 data per tab
        }

        // Hitung jumlah penulis berita yang berbeda
        $dataAuthor = Berita::select('author')->distinct()->get();
        $jumlahAuthor = $dataAuthor->count();

        // Untuk mengarahkan ke laman admin berita dengan variabel tambahan
        return view('admin.admin_berita.index', compact('berita', 'title', 'request', 'totalPengunjung', 'totalBerita', 'jumlahAuthor'), $data);
    }


    public function buat_data(): View
    {
        $data['admin'] = User::find(Auth::User()->id);
        // untuk mengarahkan ke laman tambah berita
        return view('admin.admin_berita.create', $data);
    }

    public function proses_buat_data(Request $request): RedirectResponse
    {
        // untuk validasi data yang masuk sesuai data tidak
        $request->validate([
            'gambar_berita'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judul_berita'       => 'required',
            'deskripsi_berita'  => 'required',
            'link_berita'       => 'required',
        ]);
        // dd($request->all());
        // untuk mendapatkan file image dan merubah nama
        $image = $request->file('gambar_berita');
        // digunakan untuk mengubah nama gambar menjadi inputan name
        // dan tanggal saat itu beserta menyimpannya ke local storage
        $nameImage = Carbon::now()->format('Y-m-d_H-i-s_') .
            $request->input('judul_berita') . '.' . $image->getClientOriginalExtension();
        // untuk memasukkan data gambar yang sudah di ubah namanya ke local storage
        $image->storeAs('gambar berita', $nameImage, 'public');

        // untuk mengatur id pada setiap data sesuai dengan
        // tanggal, waktu saat d tambahkan
        $id = Carbon::now()->format('YmdHis');

        // untuk membuat berita baru
        $berita = Berita::create([
            'id_berita'             => $id,
            'gambar_berita'         => $nameImage,
            'judul_berita'           => $request->judul_berita,
            'deskripsi_berita'      => $request->deskripsi_berita,
            'link_berita'           => $request->link_berita,
        ]);

        if ($berita) {
            session()->flash('success', 'Data Berita Berhasil Disimpan!');
            // untuk mengarahkan ke laman admin berita
            return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            // untuk mengarahkan ke laman admin tambah berita
            session()->flash('error', 'Gagal Membuat Data Berita');
            return redirect()->route('admin_berita.buat_data')->with(['error' => 'Data Gagal di Simpan!']);
        }
    }

    // untuk menghapus data sesuai dengan id
    public function hapus_data($id_berita): RedirectResponse
    {
        // untuk mencari dara berita sesuai dengan id nya
        $berita = Berita::findOrFail($id_berita);

        // untuk menghapus gambar yang berada di penyimpanan local
        Storage::disk('public')->delete('/gambar berita/' . $berita->gambar_berita);

        // untuk menghapus semua data sesuai id
        $berita->delete();

        if ($berita) {
            // untuk mengarahakan ke laman admin berita
            session()->flash('success', 'Data Berita Berhasil Dihapus!');
            return redirect(route('admin_berita.index'))->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            // untuk mengarahakan ke laman admin berita
            session()->flash('error', 'Gagal Menghapus Data Berita');
            return redirect(route('admin_berita.index'));
        }
    }

    public function detail_data(string $id_berita): View
    {
        // untuk mendapatkan data berita sesuai dengan id
        $berita = Berita::with('user')->findOrFail($id_berita);
        $data['admin'] = User::find(Auth::User()->id);

        // untuk mengarahkan ke laman edit seusai dengan id
        return view('admin.admin_berita.show', compact('berita'), $data);
    }

    public function edit_data(string $id_berita): View
    {
        // untuk mendapatkan data berita sesuai dengan id
        $berita = Berita::findOrFail($id_berita);

        // untuk mengarahkan ke laman edit seusai dengan id
        return view('admin.admin_berita.edit', compact('berita'));
    }

    public function proses_edit_data(Request $request, $id_berita): RedirectResponse
    {
        // untuk validasi data yang masuk apakah sesuai atau tidak
        // nullable boleh kosong // required wajib di isi
        $request->validate([
            'gambar_berita'      => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'judul_berita'        => 'required',
            'deskripsi_berita'   => 'required',
            'link_berita'        => 'required',
        ]);

        // untuk mendapatkan data berita sesuai dengan id
        $berita = Berita::findOrFail($id_berita);

        // perulangan if
        // untuk mengecek apakah ada data image yang masuk, jika iya data akan di eksekusi
        if ($request->hasFile('gambar_berita')) {

            // untuk mengirim atau mengupload data image baru
            $image = $request->file('gambar_berita');

            // untuk menghapus image lama
            Storage::disk('public')->delete('/gambar berita/' . $berita->gambar_berita);

            // digunakan untuk mengubah nama gambar menjadi inputan name
            $nameImage = Carbon::now()->format('Y-m-d_H-i-s_') . $request->input('judul_berita') .
                '.' . $image->getClientOriginalExtension();

            // untuk memasukkan data gambar yang sudah di ubah namanya ke local storage
            $path = $image->storeAs('gambar berita', $nameImage, 'public');

            // untuk update data sesuai data yang masuk
            $berita = [
                'gambar_berita'         => $nameImage,
                'judul_berita'           => $request->judul_berita,
                'deskripsi_berita'      => $request->deskripsi_berita,
                'link_berita'           => $request->link_berita,
            ];
        } else {

            // jika data image tidak di masukkan maka data image tidak akan di perbarui
            $berita = [
                'judul_berita'           => $request->judul_berita,
                'deskripsi_berita'      => $request->deskripsi_berita,
                'link_berita'           => $request->link_berita,
            ];
        }
        $data = Berita::where('id_berita', $id_berita)->update($berita);
        if ($data) {
            session()->flash('success', 'Data Berita Berhasil Diubah!');
            // mengarahkan ke laman admin berita dan memberikan sebuah pesan
            return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Diubah!']);
        } else {
            // untuk mengarahkan ke laman admin tambah berita
            session()->flash('error', 'Gagal Mengubah Data Berita');
            return redirect()->route('admin_berita.edit_data', $id_berita)->with(['error' => 'Data Gagal di Ubah!']);
        }
        // return redirect()->route('admin_berita.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function pengunjung($id_berita)
    {
        // untuk mengambil data sesuai id dari data berita
        $page = Berita::findOrFail($id_berita);
        // menambahkan 1 data ke kolom pengunjung berita
        $page->increment('pengunjung_berita');
        // jika berita di klik akan diarahkan ke link
        return redirect($page->link_berita);
    }
}
