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
            margin: 25px 15%;
        }

        label {
            font-weight: bold;
            color: black;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"],
        input[type="tgl_lahir"],
        input[namee="alamat"],
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

        .btn-custom {
            background-color: #911c1c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .pembungkus {
            width: 150px;
            height: 150px;
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

        div .w-100,
        div .w-100 .btn-custom{
            margin-top: 24px;

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
                <div class="object-fit-fill rounded">
                    <img src="{{ asset('storage/profile/' . $admin->gambar) }}" alt="profile" loading="lazy">
                </div>
            @else
                <div class="object-fit-fill rounded">
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
                    <input type="file" name="gambar" id="gambar" style="display: none;" accept="image/*" onchange="previewImage(event)">
                    <label for="gambar" style="cursor: pointer; width: 150px; height: 150px">
                        <img id="preview" class="object-fit-cover" src="{{ auth()->user()->gambar ? asset('storage/profile/' . $admin->gambar) : asset('/gambar/user.png') }}" alt="Gambar Profil">
                        <span class="edit-icon">&#9998;</span>
                    </label>
                </div>
                <p class="text-black"><span>{{ $admin->nama }}</span></p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">USERNAME</span>
                    <input  class="form-control" type="text" name="nama" id="nama"  aria-label="Username" aria-describedby="basic-addon1" value="{{ old('nama', $admin->nama) }}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class=" input-group ">
                    <span class="input-group-text" id="basic-addon1"> EMAIL </span>
                    <input class="form-control"  type="email" name="email" id="email" value="{{ old('email', $admin->email) }}" required aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"> NOMOR HP </span>
                    <input class="form-control" class="form-control" type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', $admin->no_hp) }}"  pattern="[0-9]{9,13}" aria-describedby="basic-addon1">
                </div>
                <small class="text-danger opacity-75">*Format: Minimal 9 digit, maksimal 13 digit, hanya boleh angka.</small>
            </div>

            <div class="col-md-6 mb-3">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"> TANGGAL LAHIR </span>
                    <input class="form-control"  type="date" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir', $admin->tgl_lahir) }}" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"> JENIS KELAMIN </span>
                    <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                        <option disabled >PILIH JENIS KELAMIN </option>
                        <option value="laki-laki" {{ $admin->jenis_kelamin === 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="perempuan" {{ $admin->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
            </div>


            <div class="col-md-0">
                <div class=" input-group ">
                    <span class="input-group-text" id="basic-addon1"> ALAMAT </span>
                    <input class="form-control" name="alamat" id="alamat" value="{{ old('alamat', $admin->alamat) }}">
                </div>
            </div>

                <div class="col-md-6">
                    <div class="input-group">
                        <button class="w-100" type="submit">SIMPAN PERUBAHAN</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        {{-- <button class=" w-100 btn-custom"> --}}
                            <a href="{{ url('/forget') }}" class="w-100 btn-custom text-center text-white text-decoration-none " >
                                UBAH PASSWORD
                            </a>
                        {{-- </button> --}}
                    </div>
                </div>
        </div>

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

        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

    </script>
    @endif

@endsection
