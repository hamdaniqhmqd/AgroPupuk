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

        }

        section .judul .teks {
            font-size: 24px;
            font-weight: 500;
            color: #224038;
            margin: 0 10px;
        }

        section .kotak {
            padding: 0;
        }

        section .kotak .card {
            color: var(--primary);
            height: 170px;
            width: calc(100% / 3 - 15px);
            padding: 15px 20px;
            border-color: var(--primary);
            background-color: var(--white);
            transition: var(--tran-05);
        }

        .kotak .card i {
            color: var(--primary);
            font-size: 72px;
        }

        .kotak .card .teks {
            font-size: 24px;
            font-weight: 500;
            color: var(--primary);
        }

        .kotak .card .nomor {
            font-size: 48px;
            font-weight: 500;
            color: var(--primary);
        }

        @media (max-width: 870px) {
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
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
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

        tbody td.data-aksi a i {
            font-size: 20px;
        }
    </style>
    <header class="position-relative d-flex align-items-center justify-content-between">
        <div class="page">
            <span class="list_page">{{ $title }}</span>
        </div>

        <div class="profile d-flex align-items-center">
            <span class="nama_admin">{{ $admin->nama }}</span>
            @if (auth()->user()->gambar)
                <img class="object-fit-cover  rounded" src="{{ asset('storage/profile/' . $admin->gambar) }}" alt="profile"
                    loading="lazy" />
            @else
                <img class="object-fit-fill rounded" src="{{ asset('/gambar/user.png') }}" alt="profile" loading="lazy" />
            @endif

        </div>
    </header>
    <section class="mt-2">
        <div class="informasi">
            <div class="judul d-flex align-items-center my-3">
                <i class='bx bxs-dashboard d-flex rounded-2 align-items-center justify-content-center'></i>
                <span class="teks">Data Berita</span>
            </div>
            <div class="kotak d-flex flex-wrap align-items-center justify-content-between gap-2">
                <div class="card rounded-3">
                    <span class="teks align-text-top text-end mb-2">Total Data Berita</span>
                    <div class="d-flex align-items-end justify-content-between">
                        <i class='bx bx-news'></i>
                        <span class="nomor text-end align-bottom">{{ $totalBerita }}</span>
                    </div>
                </div>
                <div class="card rounded-3">
                    <span class="teks align-text-top text-end mb-2">Total Pengunjung Berita</span>
                    <div class="d-flex align-items-end justify-content-between">
                        <i class='bx bx-group'></i>
                        <span class="nomor text-end align-bottom">{{ $totalPengunjung }}</span>
                    </div>
                </div>
                <div class="card rounded-3">
                    <span class="teks align-text-top text-end mb-2">Total Author Berita</span>
                    <div class="d-flex align-items-end justify-content-between">
                        <i class='bx bx-id-card'></i>
                        <span class="nomor text-end align-bottom">{{ $jumlahAuthor }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="data">
            <div class="d-flex align-items-center justify-content-between  my-2">
                <div class="judul d-flex align-items-center justify-content-between">
                    <i class='bx bx-table d-flex rounded-2 align-items-center justify-content-center'></i>
                    <span class="teks">Tabel</span>
                </div>
            </div>
            <div class="mb-3 d-flex align-items-center justify-content-between">
                {{-- tombol untuk mengarah ke tampilan tambah data berita --}}
                <a href="{{ route('admin_berita.buat_data') }}" class="btn btn-sm btn-success">Tambah Berita</a>
                {{-- sebuah form yang berisi kolom inputan yang digunakan untuk melakukan pencarian dengan mengirim nilai sesuai dengan atribut value --}}
                <form action="{{ route('admin_berita.index') }}" style="width: calc(50% - 25px);" class="d-flex gap-2"
                    method="GET">
                    <input class="form-control" type="text" placeholder="Ketik berita yang di cari" name="pencarian"
                        value="{{ $request->get('pencarian') }}">
                    <button type="submit" class="btn btn-sm btn-success font-weight-bold px-4">Search</button>
                </form>
            </div>
            {{-- tabel yang digunakan untuk menampilkan data dari tabel beritas --}}
            <table class="table table-hover">
                <thead>
                    <tr class="">
                        <th scope="col" class="atas nomor align-middle text-center">No</th>
                        <th scope="col" class="atas gambar align-middle text-center" style="width: 120px;">Gambar</th>
                        <th scope="col" class="atas judul align-middle text-center">Judul</th>
                        <th scope="col" class="atas admin align-middle text-center">Author</th>
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
                                    alt="{{ $data->gambar_berita }}" loading="lazy" />
                            </td>
                            <td class="isi-data data-judul">
                                <span class="judul text-start overflow-hidden">
                                    {{ $data->judul_berita }}
                                </span>
                            </td>
                            <td class="isi-data data-admin ">
                                <span class="nama_admin text-black fw-semibold text-start rounded px-3 py-1">
                                    {{ $data->user->nama }}
                                </span>
                            </td>

                            <td class="isi-data data-aksi">
                                {{-- sekelompok tombol pada setiap data kolom tabel beritas sesuai dengan id --}}
                                <form action="{{ route('admin_berita.hapus_data', $data->id_berita) }}" method="POST"
                                    id="formHapusData_{{ $data->id_berita }}"
                                    onsubmit="return hapusData({{ $data->id_berita }})"
                                    class="tombol d-flex justify-content-evenly align-items-center flex-wrap gap-1 text-center">
                                    {{-- digunakan untuk mengarah ke tampilan detail data sesuai dengan id --}}
                                    <a href="{{ route('admin_berita.detail_data', $data->id_berita) }}"
                                        class="btn btn-sm btn-success">
                                        <span class="teks d-flex align-items-center gap-2">
                                            <i class='bx bx-detail'></i>
                                            Detail
                                        </span>
                                    </a>
                                    {{-- digunakan untuk mengarah ke tampilan edit data sesuai dengan id --}}
                                    <a href="{{ route('admin_berita.edit_data', $data->id_berita) }}"
                                        class="btn btn-sm btn-primary">
                                        <span class="teks d-flex align-items-center gap-2">
                                            <i class='bx bxs-edit'></i>
                                            Ubah
                                        </span>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    {{--  digunakan untuk mengirimkan form yang akan menghapus data sesuai dengan id dan
								menampilkan validasi dengan bantuan dari alert --}}
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <span class="teks d-flex align-items-center gap-2">
                                            <i class='bx bx-trash-alt'></i>
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
    </section>

    <script>
        // sebuah fungsi untuk menampilkan validasi hapus data
        function hapusData(id_berita) {
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
                    document.getElementById('formHapusData_' + id_berita).submit();
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
