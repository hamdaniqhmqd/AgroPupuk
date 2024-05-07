<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin_dashboard()
    {
        $data['admin'] = User::find(Auth::User()->id);
        $title = 'Dashboard';

        return view('admin.dashboard_baru', compact('title'), $data);
    }
    public function showDashboard()
    {
        // Anda dapat menambahkan logika lain di sini jika diperlukan sebelum menampilkan dashboard

        return view('admin.dashboard');
    }
    // public function showDashboard() {
    //     // Logic to display the dashboard view
    //     return view('admin.dashboard');
    // }

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
