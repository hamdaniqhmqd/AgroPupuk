<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Support\Str;

use function Ramsey\Uuid\v1;

class AuthController extends Controller
{
    public function register()
    {
        if (Auth::check()) {
            if (Auth::User()->role == 'admin') {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/login');
            }
        } else {
            return view('admin.auth.register');
        }
    }

    public function process_register(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8',
            'konfirmasi_password' => 'required|same:password',
        ]);
        $id = date('YmdHis');

        User::create([
            'id' => $id,
            'username' => $request->username,
            'email' => $request->email,
            'nama' => $request->username,
            'password' => Hash::make($request->password),
            'remember_token'    => Str::random(20),
        ]);

        return redirect('/login')->with(['success' => 'Register Berhasil']);
    }

    public function login()
    {
        if (Auth::check()) {
            if (Auth::User()->role == 'admin') {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/login');
            }
        } else {
            return view('admin.auth.login');
        }
    }

    public function process_login(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], true)) {
            if (Auth::User()->role == 'admin') {
                return redirect('/admin/dashboard')->with(['success' => 'Login berhasil']);
            } else {
                return redirect('/login')->with(['warning' => 'Cek username dan password apakah sudah benar']);
            }
        } else {
            return redirect('login')->with(['error' => 'Login gagal']);
        }
    }

    // di bawah ini function yang digunakan untuk forget password
    public function forget(): View
    {
        return view('admin.auth.forgot.pilih_forget');
    }

    public function forget_email(): RedirectResponse
    {
        return redirect()->route('forget')->with(['warning' => 'Fitur belum dibuat']);
    }

    public function forget_validasi(Request $request): View
    {
        return view('admin.auth.forgot.captcha', compact('request'));
        // return view('admin.auth.forgot.validasi');
    }

    public function forget_proses_validasi(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'konfirmasi_kode' => 'required|same:kode|max:8',
        ]);

        return redirect()->route('forget.buat')->with(['success' => 'Validasi kode berhasil']);
    }

    public function forget_captcha(): View
    {
        return view('admin.auth.forgot.captcha');
    }

    public function forget_buat(): View
    {
        return view('admin.auth.forgot.password_baru');
    }

    public function forget_proses_buat(Request $request) : RedirectResponse
    {
        $request->validate([
            'username'=> 'required',
            'pass' => 'required',
            'conf_pass' => 'required|same:pass',
        ]);

        $username = $request->input('username');
        $user = User::where('username', $username)->first();
        if ($user) {
            $user->update([
                'password' => Hash::make($request->pass),
            ]);
            return redirect()->route('login')->with(['success' => 'Password Berhasil diubah']);
        } else {
            return redirect()->route('forget.validasi')->with(['warning' => 'Username tidak ditemukan']);
        }
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect('/login')->with(['success' => 'Logout Berhasil']);
    }
}
