<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerProfilAdmin extends Controller
{
    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->user()->id,
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = auth()->user();

        $user->nama = $request->nama;
        $user->email = $request->email;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '-' . $gambar->getClientOriginalName();
            $gambar->storeAs('public/gambar', $gambarName);
            $user->gambar = $gambarName;
        }

        $user->save();
        return redirect()->route('admin.profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }
}