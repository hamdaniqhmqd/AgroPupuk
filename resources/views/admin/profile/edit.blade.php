@extends('layouts.laman_profile_admin')

@section('admin_profile_edit')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin: 25px 50px;
        }

        label {
            font-weight: bold;
            color: black;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"],
        input[type="tgl_lahir"],
        select[name="jenis_kelamin"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #224038;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .pembungkus {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
        }

        .pembungkus img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        transition: filter 0.3s; /* Transisi untuk meredupkan gambar */
        }

        .pembungkus:hover img {
            filter: brightness(70%); /* Meredupkan gambar saat kursor diarahkan ke dalamnya */
        }

        .edit-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff; /* Warna ikon */
            font-size: 20px; /* Ukuran ikon */
            opacity: 0; /* Awalnya tidak terlihat */
            transition: opacity 0.3s; /* Transisi untuk kemunculan ikon */
            cursor: pointer;
        }

        .pembungkus:hover .edit-icon {
            opacity: 1; /* Menampilkan ikon saat kursor diarahkan ke dalam gambar */
        }
    </style>

    <header class="position-relative d-flex align-items-center justify-content-between">
        <div class="page">
            <span class="list_page">{{ $title }}</span>
        </div>

        <div class="profile d-flex align-items-center">
            <span class="nama_admin">{{ $admin->nama }}</span>
            @if (auth()->user()->gambar)
                <div class="object-fit-fill rounded" >
                    <img src="{{ asset('storage/profile/' . $admin->gambar) }}" alt="profile" loading="lazy">
                </div>
            @else
                <div class="object-fit-fill rounded" >
                    <img src="{{ asset('/gambar/user.png') }}" alt="profile" loading="lazy">
                </div>
            @endif
        </div>
    </header>

    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="d-flex justify-content-center pt-5">
            <div class="text-center flex-column">
                <div class="pembungkus">
                    <input type="file" name="gambar" id="gambar" style="display: none;">
                    <label for="gambar" style="cursor: pointer;">
                        @if (auth()->user()->gambar)
                            <img src="{{ asset('storage/profile/' . $admin->gambar) }}" alt="Gambar Profil">
                        @else
                            <img src="{{ asset('/gambar/user.png') }}" alt="profile">
                        @endif
                        <span class="edit-icon">&#9998;</span> <!-- Ikon edit -->
                    </label>
                </div>
                <p class="text-black"><span>{{ $admin->nama }}</span></p>
            </div>
        </div>


        <label for="nama">NAMA</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $admin->nama) }}" required>

        <label for="email">EMAIL</label>
        <input type="email" name="email" id="email" value="{{ old('email', $admin->email) }}" required>

        <label for="email">NOMOR HP</label>
        <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', $admin->no_hp) }}" required pattern="[0-9]{9,13}">
        <small class="text-danger opacity-75">*Format: Minimal 9 digit, maksimal 13 digit, hanya boleh angka.</small>

        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir', $admin->tgl_lahir) }}">

        <label for="jenis_kelamin">JENIS KELAMIN</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option disabled >PILIH JENIS KELAMIN </option>
            <option value="laki-laki" {{ $admin->jenis_kelamin === 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="perempuan" {{ $admin->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>

        <button class="mt-3" type="submit">SIMPAN PERUBAHAN</button>
    </form>

    @if (session('success'))
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script>
        Swal.fire({
            title: 'Success',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    @endif

@endsection
