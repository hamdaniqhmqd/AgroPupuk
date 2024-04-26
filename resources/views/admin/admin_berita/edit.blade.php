@extends('layouts.laman_admin_berita') {{-- digunakan untuk memanggil file --}}
{{-- digunakan untuk meengidentifikasi nama dari section --}}
@section('edit_berita')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        {{-- form untuk melakukan edit data beriita dengan method post,
                            yang mengarah ke proses_edit_data, dengan mengirimkan data sesuai dengan id--}}
                        <form action="{{ route('admin_berita.proses_edit_data', $berita->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') {{-- untuk memperbarui atau mengedit data berita yang ada.  --}}
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Gambar Berita : </label>
                                <input type="file" accept="image/jpeg, image/png" class="form-control @error('gambar_berita') is-invalid @enderror"
                                    name="gambar_berita" placeholder="Masukkan Gambar Berita">
                                <!-- error message untuk gambar_berita -->
                                @error('gambar_berita')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama Berita :</label>
                                <input type="text" class="form-control @error('nama_berita') is-invalid @enderror"
                                    name="nama_berita" placeholder="Masukkan Judul Berita"
                                    value="{{ old('nama_berita', $berita->nama_berita) }}">
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
                                    name="link_berita" value="{{ old('link_berita', $berita->link_berita) }}"
                                    placeholder="Masukkan Sumber link_berita Berita">
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
                                    placeholder="Masukkan Deskripsi Berita">{{ old('deskripsi_berita', $berita->deskripsi_berita) }}</textarea>
                                <!-- error message untuk description -->
                                @error('deskripsi_berita')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <div class="">
                                    {{-- digunakan untuk mengirimkan form --}}
                                    <button type="submit" class="btn btn-md btn-primary me-2">Perbarui</button>
                                    {{-- digunakan untuk mengosongkan form --}}
                                    <button type="reset" class="btn btn-md btn-warning">Kosongkan</button>
                                </div>
                                {{-- digunakan untuk kembali ke halaman dashboard berita --}}
                                <a href="{{ route('admin_berita.index') }}" class="btn btn-md btn-dark me-3">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
