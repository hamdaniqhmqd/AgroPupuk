@extends('layouts.laman_admin_berita')
{{-- digunakan untuk memanggil file --}}
@section('detail_berita')
    {{-- digunakan untuk meengidentifikasi nama dari section --}}
    {{-- card, untuk menampilkan gambar dan nama gambar berita sesuai dengan id --}}
    {{-- card, untuk menampilkan data id, nama, sumber link,nama admin, --}}
    {{-- kapan data dibuat dan kapan data di ubah sesuai dengan id --}}
    {{-- card, untuk menampilkan deskripsi dari data berita sesuar dengan id --}}
    {{-- sekelompok tombol pada setiap data kolom tabel beritas sesuai dengan id --}}
    {{-- form, untuk melakukan eksekusi proses hapus data --}}
    {{-- dugunakan untuk mengarah ke tampilan edit data sesuai dengan id --}}
    {{-- dugunakan untuk mengarah ke tampilan laman admin berita --}}

    <style>
        .card {
            padding: 16px 24px;
        }

        .gambar {
            background-color: transparent;
        }

        .gambar img {
            height: 300px;
            width: 400px;
            object-fit: cover;
        }

        .gambar .data-gambar {
            position: relative;
            font-size: 18px;
            width: 400px;
            height: 100%;
        }

        .gambar .data-gambar .isi-data {
            text-align: justify;
        }

        .side-gambar {
            width: 60%;
        }

        .side-gambar .data-side {
            height: 100%;
            width: 100%;
        }

        .side-gambar .data-side .isi-data {
            font-size: 18px;
            font-weight: 400;
            height: 100%;
            text-align: justify;
        }

        .main .data-main .isi-main {
            height: 100%;
            font-size: 18px;
            font-weight: 400;
            text-align: justify;
        }

        .footer a {
            width: 100px;
        }
    </style>

    <div class="d-flex flex-column gap-3">
        <div class="header d-flex justify-content-center flex-wrap gap-3">
            <div class="gambar card p-0 border-0 d-flex flex-column g-3">
                <img class="gambar-berita rounded" src="{{ asset('/storage/gambar berita/' . $berita->gambar_berita) }}"
                    alt="{{ $berita->gambar_berita }}" srcset="" loading="lazy">
                <div class=" data-gambar card mt-3">
                    <h5 class="p-0 fw-semibold">Nama Gambar</h5>
                    <div class="isi-data text-break">{{ $berita->gambar_berita }}</div>
                </div>
            </div>
            <div class="side-gambar me-0 card d-flex flex-column justify-content-between flex-fill">
                <div class="data-side">
                    <h5 class="p-0 fw-semibold">Id Berita</h5>
                    <div class="isi-data text-break">{{ $berita->id }}</div>
                </div>
                <div class="data-side mb-2">
                    <h5 class="p-0 fw-semibold">Data Berita Dibuat Oleh </h5>
                    <div class="isi-data text-break">Hamdani</div>
                </div>
                <div class="data-side mb-2">
                    <h5 class="p-0 fw-semibold">Data Berita Dibuat Pada</h5>
                    <div class="isi-data text-break">{{ $berita->created_at }}</div>
                </div>
                <div class="data-side mb-2">
                    <h5 class="p-0 fw-semibold">Data Berita Diubah Pada</h5>
                    <div class="isi-data text-break">{{ $berita->updated_at }}</div>
                </div>
                <div class="data-side mb-2">
                    <h5 class="p-0 fw-semibold">Data Pengunjung</h5>
                    <div class="isi-data text-break">{{ $berita->pengunjung_berita }}</div>
                </div>
            </div>
        </div>
        <div class="main card">
            <div class="data-main mb-2">
                <h5 class="p-0 fw-semibold">Judul Berita</h5>
                <div class="isi-main text-break">{{ $berita->nama_berita }}</div>
            </div>
            <div class="data-main mb-2">
                <h5 class="p-0 fw-semibold">Sumber Link</h5>
                <a href="{{ $berita->link_berita }}" class="isi-main text-break"
                    target="_blank">{{ $berita->link_berita }}</a>
            </div>
            <div class="data-main mb-2">
                <h5 class="p-0 fw-semibold">Deskripsi Berita</h5>
                <div class="isi-main text-break">{{ $berita->deskripsi_berita }}</div>
            </div>
        </div>
        <div class="footer d-flex justify-content-between align-items-center">
            {{-- sekelompok tombol pada setiap data kolom tabel beritas sesuai dengan id --}}
            {{-- form, untuk melakukan eksekusi proses hapus data --}}
            <form action="{{ route('admin_berita.hapus_data', $berita->id) }}" method="POST"
                id="formHapusData_{{ $berita->id }}" onsubmit="return hapusData({{ $berita->id }})"
                class="d-flex gap-3">
                {{-- dugunakan untuk mengarah ke tampilan edit data sesuai dengan id --}}
                <a href="{{ route('admin_berita.edit_data', $berita->id) }}" class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            {{-- dugunakan untuk mengarah ke tampilan laman admin berita --}}
            <a href="{{ route('admin_berita.index') }}" class="btn btn-dark">Kembali</a>
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



{{-- <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-start">

                    <div class="card border-0 rounded d-flex flex-fill justify-content-center">
                        <img src="{{ asset('/storage/gambar berita/' . $berita->gambar_berita) }}"
                            style="max-width: 300px;  min-width: 100px;" class="card-img-top rounded mb-3 align-self-center">
                        <div class="card border-0 rounded p-2 mb-3 flex-fill" style="background-color: #E3E3E3;">
                            <div class="card-text"><strong>Nama Gambar berita : </strong>
                                <br>{{ $berita->gambar_berita }}
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm rounded flex-fill" style="height: 100%; background-color: #E3E3E3;">
                        <div class="card-body">
                            <div class="p-1 m-1"><strong>Id Berita : </strong><br>{{ $berita->id }}</div>
                            <div class="p-1 m-1"><strong>Nama Berita :</strong><br>{{ $berita->nama_berita }}</div>
                            <div class="p-1 m-1"><strong>Sumber Link Berita : </strong><br>
                                <a href="{{ $berita->link_berita }}" target="_blank">{{ $berita->link_berita }}</a>
                            </div>
                            <div class="p-1 m-1"><strong>Nama Admin :</strong><br>Nama Admin</div>
                            <div class="p-1 m-1"><strong>Pengunjung :</strong><br>{{ $berita->pengunjung_berita }}</div>
                            <div class="p-1 m-1"><strong>Dibuat pada :</strong><br>{{ $berita->created_at }}</div>
                            <div class="p-1 m-1"><strong>Diubah pada :</strong><br>{{ $berita->updated_at }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="card border-0 shadow-sm rounded flex-fill" style="background-color: #E3E3E3">
                        <div class="card-body">
                            <div class="p-1 m-0"><strong>Deskripsi berita :</strong><br>{{ $berita->deskripsi_berita }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" d-flex gap-3 justify-content-between flex-fill">
                <form action="{{ route('admin_berita.hapus_data', $berita->id) }}" method="POST"
                    id="formHapusData_{{ $berita->id }}" onsubmit="return hapusData({{ $berita->id }})"
                    class="d-flex gap-3">
                    <a href="{{ route('admin_berita.edit_data', $berita->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                </form>
                <a href="{{ route('admin_berita.index') }}" class="btn btn-sm btn-dark">Kembali</a>
            </div>
        </div>
    </div> --}}
