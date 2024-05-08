@extends('layouts.laman_profile_admin')
{{-- digunakan untuk memanggil file --}}
{{-- digunakan untuk meengidentifikasi nama dari section --}}
@section('admin_profile_edit')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Add styles to the form itself */
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin: 24px 36px;
            /* Add spacing between labels and input fields */
            /* margin-left: 300px; */
            /* Add margin to the form */
             margin-top: 170px;
            /* margin-right: 50px; */
        }

        /* Style the labels */
        label {
            font-weight: bold;
            /* Make labels bold */
        }

        /* Style the input fields */
        input[type="text"],
        input[type="email"],
        input[type="file"],
        select[name="jenis_kelamin"],
        input[type="file"] {
            padding: 5px;
            /* Add padding to the input fields */
            border: 1px solid #ccc;
            /* Add a border to the input fields */
            border-radius: 4px;
            /* Add rounded corners to the input fields */
        }

        /* Style the button */
        button[type="submit"] {
            background-color: #4CAF50;
            /* Green color for the button */
            color: white;
            /* White text color for the button */
            padding: 10px 20px;
            /* Add padding to the button */
            border: none;
            /* Remove border from the button */
            border-radius: 4px;
            /* Add rounded corners to the button */
            cursor: pointer;
            /* Make the button look clickable */
        }

        form img {
            position: absolute;
            top: 100px;
            left: 700px;
        }

        form label {
          color: black;
        }

        p{
          color:black;
        }
    </style>

   
    <header class="position-relative d-flex align-items-center justify-content-between">
        <div class="page">
            <span class="list_page">{{ $title }}</span>
        </div>

        <div class="profile d-flex align-items-center">
            <span class="nama_admin">{{ $admin->nama }}</span>
            <img class="object-fit-cover rounded" src="{{ asset('storage/profile/' . $admin->gambar) }}" alt="profile" loading="lazy" />
        </div>
    </header>

    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $admin->nama) }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email', $admin->email) }}" required>

        <label for="email">Nomor HP:</label>
        <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', $admin->no_hp) }}" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select name="jenis_kelamin" id="jenis_kelamin" required>
        <option value="laki-laki" {{ $admin->jenis_kelamin === 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
        <option value="perempuan" {{ $admin->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
    </select>

        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" id="gambar">

        @if (auth()->user()->gambar)
            <img src="{{ asset('storage/profile/' . $admin->gambar) }}" alt="Gambar Profil" width="100" height="100">
        @endif

        <button type="submit">Simpan Perubahan</button>
    </form>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
@endsection