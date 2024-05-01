@extends('layouts.laman_admin_berita')
{{-- digunakan untuk memanggil file --}}
{{-- digunakan untuk meengidentifikasi nama dari section --}}
@section('admin_berita')
    <style>
        section .judul i {
            position: relative;
            height: 35px;
            font-size: 26px;
            width: 35px;
            color: var(--primary);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        section .judul .teks {
            font-size: 24px;
            font-weight: 500;
            color: #224038;
            margin: 0 10px;
        }

        section .kotak {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
            padding: 0;
        }

        section .kotak .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 12px;
            height: 170px;
            width: calc(100% / 3 - 10px);
            padding: 15px 20px;
            color: whitesmoke;
            background-color: salmon;
            transition: var(--tran-05);
        }

        .kotak .card i {
            font-size: 35px;
            color: saddlebrown;
        }

        .kotak .card .teks {
            white-space: nowrap;
            font-size: 18px;
            font-weight: 500;
            color: aquamarine;
        }

        .kotak .card .nomor {
            font-size: 40px;
            font-weight: 500;
            color: bisque;
        }

        @media (max-width: 780px) {
            section .kotak .card {
                width: calc(100% / 2 - 10px);
            }
        }

        @media (max-width: 580px) {
            section .kotak .card {
                width: 100%;
            }
        }

        table {
            width: 100%;
        }

        table thead {
            background-color: var(--primary);
            height: 32px;
        }

        thead tr {
            padding: 5px;
        }

        thead th.atas {
            font-size: 14px;
            font-weight: 500;
            border: none;
            padding: 0;
            color: white;
        }

        thead th.nomor {
            width: 5%;
        }

        thead th.aksi {
            width: 25%;
        }

        thead th.gambar {
            width: 120px;
        }

        thead th.admin {
            width: 140px
        }

        table tbody {
            font-size: 14px;
        }

        table tbody tr {
            height: 120px;
            align-self: center;
            border-bottom: #224038 1px solid;
        }

        table tbody .data-judul .judul {
            height: 108px;
            display: block;
            border: none;
        }

        table tbody .data-admin .nama_admin {
            background-color: sandybrown;
            padding: 4px 8px;
            color: whitesmoke;
            display: inline-block;
            border: none;
        }

        table tbody img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        table tbody .data-aksi {
            display: inline-block;
            width: 100%;
            height: 124px;
            border: none;
        }

        tbody td.data-aksi a {
            width: 82px;
        }
    </style>

    <div class="informasi">
        <div class="judul d-flex align-items-center mt-3 mb-3">
            <i class='bx bxs-dashboard'></i>
            <span class="teks">Data Berita</span>
        </div>

        <div class="kotak">
            <div class="card">
                <i class="bi bi-info-square"></i>
                <span class="teks">Total Pengunjung</span>
                <span class="nomor">50,120</span>
            </div>
            <div class="card">
                <i class="bi bi-info-square"></i>
                <span class="teks">Total Berita</span>
                <span class="nomor">20,120</span>
            </div>
            <div class="card">
                <i class="bi bi-info-square"></i>
                <span class="teks">Total</span>
                <span class="nomor">10,120</span>
            </div>
        </div>
    </div>
    <div class="data">
        <div class="d-flex align-items-center justify-content-between">
            <div class="judul d-flex align-items-center justify-content-between mt-3 mb-3">
                <i class='bx bx-table' ></i>
                <span class="teks">Tabel</span>
                {{-- tombol untuk mengarah ke tampilan tambah data berita --}}
                <a href="{{ route('admin_berita.buat_data') }}" class="btn btn-sm btn-success">Tambah Berita</a>
            </div>
            {{-- sebuah form yang berisi kolom inputan yang digunakan untuk melakukan pencarian dengan mengirim nilai sesuai dengan atribut value --}}
            <form action="{{ route('admin_berita.index') }}" style="width: calc(50% - 150px);" class=""
                method="GET">
                <input class="form-control" type="text" placeholder="Ketik berita yang di cari" name="pencarian"
                    value="{{ $request->get('pencarian') }}">
            </form>
        </div>
        {{-- tabel yang digunakan untuk menampilkan data dari tabel beritas --}}
        <table class="table table-hover">
            <thead>
                <tr class="">
                    <th scope="col" class="atas nomor align-middle text-center">No</th>
                    <th scope="col" class="atas gambar align-middle text-center" style="width: 120px;">Gambar</th>
                    <th scope="col" class="atas judul align-middle text-center">Judul</th>
                    <th scope="col" class="atas admin align-middle text-center">Admin</th>
                    <th scope="col" class="atas aksi align-middle text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- sebuah perulangan dengan mengambil data dari variabel $berita dan di masukan ke variabel $data
				jika ada data dari tabel data beritas maka akan menampilkan data tersebut --}}
                @forelse ($berita as $data)
                    <tr class="data-row">
                        <td class="isi-data text-center" scope="row">{{ $loop->index + 1 }}</td>
                        <td class="isi-data text-center" style="width: 120px;">
                            <img class="rounded" src="{{ asset('storage/gambar berita/' . $data->gambar_berita) }}"
                                alt="{{ $data->gambar_berita }}" loading="lazy"/>
                        </td>
                        <td class="isi-data data-judul">
                            <span class="judul text-start overflow-hidden">
                                {{ $data->nama_berita }}
                            </span>
                        </td>
                        <td class="isi-data data-admin ">
                            <span class="nama_admin text-start rounded px-3 py-1">
                                hamdani
                            </span>
                        </td>

                        <td class="isi-data data-aksi">
                            {{-- sekelompok tombol pada setiap data kolom tabel beritas sesuai dengan id --}}
                            <form action="{{ route('admin_berita.hapus_data', $data->id) }}" method="POST"
                                id="formHapusData_{{ $data->id }}" onsubmit="return hapusData({{ $data->id }})"
                                class="tombol d-flex justify-content-around align-items-center flex-wrap gap-1 text-center">
                                {{-- digunakan untuk mengarah ke tampilan detail data sesuai dengan id --}}
                                <a href="{{ route('admin_berita.detail_data', $data->id) }}"
                                    class="btn btn-sm btn-success">
                                    <span class="teks">
                                        <i class="bi bi-info-square"></i>
                                        Detail
                                    </span>
                                </a>
                                {{-- digunakan untuk mengarah ke tampilan edit data sesuai dengan id --}}
                                <a href="{{ route('admin_berita.edit_data', $data->id) }}" class="btn btn-sm btn-primary">
                                    <span class="teks">
                                        <i class="bi bi-info-square"></i>
                                        Ubah
                                    </span>
                                </a>
                                @csrf
                                @method('DELETE')
                                {{--  digunakan untuk mengirimkan form yang akan menghapus data sesuai dengan id dan
								menampilkan validasi dengan bantuan dari alert --}}
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <span class="teks">
                                        <i class="bi bi-info-square"></i>
                                        Hapus
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty {{-- digunakan untuk menampilkan pesan jika data di dalam beritas kosong --}}
                    <tr class="">
                        <td class="text-center" colspan="7">
                            {{-- jika terdapat nilai dari variabel $request yang mengambil data dari nilai pencarian --}}
                            @if ($request->get('pencarian'))
                                Data {{ $request->get('pencarian') }} tidak ditemukan.
                            @else
                                {{-- jika tidak terdapat nilai dari variabel $request maka akan menampilakan pesan dibawah --}}
                                Data berita belum ditambahkan.
                            @endif
                        </td>
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
