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
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image" placeholder="Masukkan Gambar Berita">
                                <!-- error message untuk image -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama Berita :</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Masukkan Judul Berita"
                                    value="{{ old('name', $berita->name) }}">
                                <!-- error message untuk name -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Sumber Link Berita :</label>
                                <input type="text" class="form-control @error('link') is-invalid @enderror"
                                    name="link" value="{{ old('link', $berita->link) }}"
                                    placeholder="Masukkan Sumber Link Berita">
                                <!-- error message untuk link -->
                                @error('link')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Deskripsi Berita :</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5"
                                    placeholder="Masukkan Deskripsi Berita">{{ old('description', $berita->description) }}</textarea>
                                <!-- error message untuk description -->
                                @error('description')
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
