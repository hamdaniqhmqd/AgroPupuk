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
	public function register(): View
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
		]);
        // dd($request->all());
        $id = date('Ymd');

		User::create([
            'id'=> $id,
			'username' => $request->username,
			'email' => $request->email,
			'nama' => $request->username,
			'password' => Hash::make($request->password),
            'remember_token'    => Str::random(20),
		]);

		return redirect('/login')->with(['success' => 'Register successfully']);
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
                return redirect('/admin/dashboard')->with(['success' => 'Login successfully']);
            } else {
                return redirect('/login')->with(['error' => 'Checked your email and password']);
            }
        } else {
            return redirect('login')->with(['error' => 'Login failed']);
        }
    }

	public function forget(): View
	{
		return view('admin.auth.forgot.pilih_forget');
	}

    public function logout(): RedirectResponse{
        Auth::logout();
        return redirect('login')->with(['success' => 'Logout Berhasil']);
    }
}
