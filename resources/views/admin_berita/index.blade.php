@extends('layouts.laman_admin_berita') {{-- digunakan untuk memanggil file --}}
{{-- digunakan untuk meengidentifikasi nama dari section --}}
@section('admin.berita')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="row mb-2 mt-2">
                            <div class="col-md-6 d-flex">
                                <h2 class="fw-bold">Berita</h2>
                                {{-- tombol untuk mengarah ke tampilan tambah data berita --}}
                                <a href="{{ route('admin_berita.buat_data') }}"
                                    class="btn btn-sm btn-success ms-4 text-center align-content-center">Tambah Berita</a>
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="flex-fill align-content-center">
                                    {{-- sebuah form yang berisi kolom inputan yang digunakan untuk melakukan pencarian
                                        dengan mengirim nilai sesuai dengan atribut value --}}
                                    <form action="{{ route('admin_berita.index') }}" class="" method="GET">
                                        <input class="form-control me-2" type="text"
                                            placeholder="Ketik berita yang di cari" name="search"
                                            value="{{ $request->get('search') }}">
                                    </form>
                                </div>
                            </div>
                            <hr style="border: 2px solid #224038;" class="mt-5">
                        </div>
                        {{-- tabel yang digunakan untuk menampilkan data dari tabel beritas --}}
                        <table class="table table-borderless table-responsive table-hover table-striped">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col" class="text-center p-1" style="width: 3%;">NO.</th>
                                    <th scope="col" class="text-center p-1">IMAGE</th>
                                    <th scope="col" class="text-center p-1" style="width: ;">ID</th>
                                    <th scope="col" class="text-center p-1" style="width: ;">JUDUL BERITA</th>
                                    {{-- <th scope="col" class="text-center p-1" style="width: 25%;">DESKRIPSI</th> --}}
                                    <th scope="col" class="text-center p-1" style="width: ;">SUMBER LINK</th>
                                    <th scope="col" class="text-center p-1" style="width: ;">NAMA ADMIN</th>
                                    <th scope="col" class="text-center p-1" style="width: 15%;">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- sebuah perulangan dengan mengambil data dari variabel $berita dan di masukan ke variabel $data
                                    jika ada data dari tabel data beritas maka akan menampilkan data tersebut --}}
                                @forelse ($berita as $data)
                                    <tr>
                                        <td class="text-center">{{ $loop->index + 1 }}</td>
                                        <td class="text-center" style="width: 140px;">
                                            <img src="{{ asset('storage/gambar berita/' . $data->image) }}" class="rounded"
                                                style="width: 120px">
                                        </td>
                                        <td class="text-center">{{ $data->id }}</td>
                                        <td class="text-center">{{ $data->name }}</td>
                                        {{-- <td class="text-break">{{ $data->description }}</td> --}}
                                        <td class="text-center"><a href="{{ $data->link }}">{{ $data->link }}</a></td>
                                        <td class="text-center">NAMA ADMIN</td>
                                        <td class="text-center">
                                            {{-- sekelompok tombol pada setiap data kolom tabel beritas sesuai dengan id --}}
                                            <form action="{{ route('admin_berita.hapus_data', $data->id) }}" method="POST"
                                                id="formHapusData_{{ $data->id }}"
                                                onsubmit="return hapusData({{ $data->id }})">
                                                {{-- dugunakan untuk mengarah ke tampilan detail data sesuai dengan id --}}
                                                <a href="{{ route('admin_berita.detail_data', $data->id) }}"
                                                    class="btn btn-sm btn-success">Detail</a>
                                                {{-- dugunakan untuk mengarah ke tampilan edit data sesuai dengan id --}}
                                                <a href="{{ route('admin_berita.edit_data', $data->id) }}"
                                                    class="btn btn-sm btn-primary">Ubah</a>
                                                @csrf
                                                @method('DELETE')
                                                {{--  digunakan untuk mengirimkan form yang akan menghapus data sesuai dengan id dan
                                                    menampilkan validasi dengan bantuan dari alert --}}
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty {{-- digunakan untuk menampilkan pesan jika data di dalam beritas kosong --}}
                                    <tr class="">
                                        <td class="text-center" colspan="7">Data berita belum ditambahkan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- untuk menampilkan paginasi dari data variabel $berita
                            jika data melebihi batas ketentuan --}}
                        <ul class="pagination d-flex justify-content-start">
                            {{-- list, jika ada data tab sebelumnya dari tab yang di kunjungi saat itu
                                maka akan mengaktifkan tombol sebelumnya dan berlaku untuk kebalikannya --}}
                            <li class="page-item {{ $berita->previousPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $berita->previousPageUrl() }}">Sebelumnya</a>
                            </li>
                            {{-- digunakan untuk menampilkan daftar tab.
                                Perulangan ini akan berjalan dari tab pertama hingga tab terakhir yang ada dalam data paginasi. --}}
                            @for ($i = 1; $i <= $berita->lastPage(); $i++)
                                {{-- untuk setiap tab dalam paginasi.
                                Jika tab saat ini adalah tab yang sedang ditampilkan,
                                maka class active akan ditambahkan untuk menyorot tab tersebut. --}}
                                <li class="page-item {{ $berita->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $berita->url($i) }}">{{ $i }}</a>
                                    {{-- untuk tautan ke setiap tab paginasi --}}
                                </li>
                            @endfor
                            {{-- list, jika ada data tab setelah dari tab yang di kunjungi saat itu
                                maka akan mengaktifkan tombol selanjutnya dan berlaku untuk kebalikannya --}}
                            <li class="page-item {{ $berita->nextPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $berita->nextPageUrl() }}">Selanjutnya</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // sebuah fungsi untuk menampilkan validasi hapus data
        function hapusData(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengonfirmasi dengan click ya,
                    // form akan disubmit
                    document.getElementById('formHapusData_' + id).submit();
                } else {
                    // Jika pengguna memilih "Tidak",
                    // form tidak akan disubmit
                    return false;
                }
            });

            // Jangan disubmit secara otomatis sebelum mendapatkan konfirmasi
            return false;
        }
    </script>
@endsection
