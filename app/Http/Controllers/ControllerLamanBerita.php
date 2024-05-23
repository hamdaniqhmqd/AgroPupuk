<?php

namespace App\Http\Controllers;

use App\Models\beranda_corosel;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ControllerLamanBerita extends Controller
{
	public function index(Request $request): View
	{
        // variabel untuk mengambil data dari tabel beritas
        // sebanyak 6 data per tab menggunakan fungsi paginate
		$berita = Berita::latest()->paginate(6);
        // variabel untuk mengambil data dari tabel beritas
        // sebanyak 5 data per tab menggunakan fungsi take
		$beritaSide = Berita::orderBy('pengunjung_berita', 'desc')->take(5)->get();
        // varabel untuk memberikan isi dari tag title
		$title = 'Berita';
        // variabel untuk mendapatkan data request dari pencarian
		$search = $request->get('pencarian');
        // jika ada data dari variabel $search maka mengeluarkan data pencarian
        // jika tidak ada data dari variabel $search maka mengeluarkan data ke variabel $berita
		if ($search) {
			$berita = Berita::whereAny([ // pencarian berdasarkan id name description link pada data tabel beritas
				'nama_berita',
				'deskripsi_berita',
				'link_berita',
			], 'LIKE', "%$search%")->paginate(6); // jika ada data yang sesuai maka akan di tampilkan sebanyak 6 per tab
		}
        $corosel = beranda_corosel::take(3)->get();

		return view('component.berita_laman_berita', compact('berita', 'request', 'beritaSide', 'title', 'corosel'));
	}
}
