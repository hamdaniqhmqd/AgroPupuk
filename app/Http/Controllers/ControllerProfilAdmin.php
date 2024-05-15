<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ControllerProfilAdmin extends Controller
{
    public function edit()
    {
        $data['admin'] = User::find(Auth::User()->id);
        $title = 'Edit Profile';

        return view('admin.profile.edit', compact('title'), $data);
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:50',
            'email' => 'required|string|email|max:70|unique:users,email,' . auth()->user()->id,
            'no_hp' => 'required|string|max:15',
            'jenis_kelamin' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9000',
        ]);

        $user = auth()->user();

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->jenis_kelamin = $request->jenis_kelamin;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');

            // untuk menghapus image lama
            Storage::delete('public/profile/' . $user->gambar);

            $gambarName = time() . '-' . $gambar->getClientOriginalName();
            $gambar->storeAs('public/profile/', $gambarName);

            // $gambar->storeAs('storage/profile', $gambarName);
            $user->gambar = $gambarName;
        }

        $user->save();
        return redirect()->route('admin.profile.edit')->withSuccess('Data berhasil disimpan.');

    }
}
