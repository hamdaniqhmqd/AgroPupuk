@extends('layouts.laman_admin_berita') {{-- digunakan untuk memanggil file --}}
@section('tambah_berita') {{-- digunakan untuk meengidentifikasi nama dari section --}}
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        {{-- form masukkan data beriita dengan method post, yang mengarah ke proses_buat_data --}}
                        <form action="{{ route('admin_berita.proses_buat_data') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Gambar Berita :</label>
                                <input type="file" accept="image/jpeg, image/png" class="form-control @error('gambar_berita') is-invalid @enderror"
                                    name="gambar_berita">
                                <!-- error message untuk gambar_berita -->
                                @error('gambar_berita')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama Berita</label>
                                <input type="text" class="form-control @error('nama_berita') is-invalid @enderror"
                                    name="nama_berita" value="{{ old('nama_berita') }}" placeholder="Masukkan Judul Berita">
                                <!-- error message untuk nama_berita -->
                                @error('nama_berita')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Sumber Link Berita :</label>
                                <input type="text" class="form-control @error('link_berita') is-invalid @enderror"
                                    name="link_berita" value="{{ old('link_berita') }}" placeholder="Masukkan Sumber Link">
                                <!-- error message untuk link_berita -->
                                @error('link_berita')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Deskripsi Berita :</label>
                                <textarea class="form-control @error('deskripsi_berita') is-invalid @enderror" name="deskripsi_berita" rows="5"
                                    placeholder="Masukkan Deskripsi Berita">{{ old('deskripsi_berita') }}</textarea>
                                <!-- error message untuk deskripsi_berita -->
                                @error('deskripsi_berita')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 d-flex justify-content-between">
                                <div class="">
                                    <!-- digunakan untuk mengirimkan form -->
                                    <button type="submit" class="btn btn-sm btn-primary me-3">Simpan</button>
                                    <!-- digunakan untuk mengosongkan form -->
                                    <button type="reset" class="btn btn-sm btn-warning">Kosongkan</button>
                                </div>
                                <!-- digunakan untuk kembali ke halaman sebelumnya -->
                                <a href="{{ route('admin_berita.index') }}" class="btn btn-sm btn-dark">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
