<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('utility/formprod');
    }

    public function submitForm(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh: Hanya menerima file gambar dengan maksimum 2MB
        ]);

        // Proses penyimpanan data atau manipulasi lainnya sesuai kebutuhan aplikasi Anda
        // Jika perlu, Anda dapat mengakses data yang dikirim dari formulir melalui $request->nama, $request->deskripsi, $request->file('gambar')
        // Setelah selesai, Anda bisa mengarahkan pengguna ke halaman lain atau menampilkan pesan berhasil, dll.
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

}
