<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Ambil waktu sekarang
            $currentTime = Carbon::now();

            // Ambil waktu kadaluwarsa sesi dari session atau default ke 00:00 hari ini
            $sessionExpiry = Auth::user()->session_expiry;

            // Jika sesi sudah kadaluwarsa
            if ($currentTime->greaterThanOrEqualTo(Carbon::parse($sessionExpiry))) {


                // Hapus session_expiry dari user
                $request->user()->update(['session_expiry' => null]);

                // Logout pengguna
                Auth::logout();

                // Redirect ke halaman login dengan pesan
                return redirect('/login')->with('warning', 'Sesi anda telah habis. Silahkan login kembali.');
            }

            // Memeriksa apakah pengguna adalah admin
            if (Auth::user()->role == 'admin') {
                return $next($request);
            } else {
                Auth::logout();
                return redirect('/login');
            }
        } else {
            Auth::logout();
            return redirect('/login');
        }

        return $next($request);
    }
}
