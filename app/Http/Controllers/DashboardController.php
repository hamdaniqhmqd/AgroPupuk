<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //public function showDashboard()
    //{
        // Anda dapat menambahkan logika lain di sini jika diperlukan sebelum menampilkan dashboard

        //return view('app');
    //}

    public function showProfile()
    {
        // Logika untuk menampilkan halaman profil
        return view('dashboard/profil');
    }

    public function showProducts()
    {
        // Logika untuk menampilkan halaman produk
        return view('dashboard/produk');
    }

    public function showPosts()
    {
        // Logika untuk menampilkan halaman postingan
        return view('dashboard/postingan');
    }

    
    public function showPage()
    {
        // Misalnya, jika Anda memiliki halaman dengan slug 'about', Anda bisa mengaksesnya dengan '/page/about'
        return view('dashboard/halaman');
    }

}

?>