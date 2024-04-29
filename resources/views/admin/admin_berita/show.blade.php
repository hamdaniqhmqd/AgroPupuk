@extends('layouts.laman_admin_berita') {{-- digunakan untuk memanggil file --}}
{{-- digunakan untuk meengidentifikasi nama dari section --}}
@section('detail_berita')
    <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-start">
                    {{-- card, untuk menampilkan gambar dan nama gambar berita sesuai dengan id --}}
                    <div class="card border-0 rounded d-flex flex-fill justify-content-center">
                        <img src="{{ asset('/storage/gambar berita/' . $berita->gambar_berita) }}" style="max-width: 300px;  min-width: 100px;"
                            class="card-img-top rounded mb-3 align-self-center">
                        <div class="card border-0 rounded p-2 mb-3 flex-fill" style="background-color: #E3E3E3;">
                            <div class="card-text"><strong>Nama Gambar berita : </strong>
                                <br>{{ $berita->gambar_berita }}
                            </div>
                        </div>
                    </div>
                    {{-- card, untuk menampilkan data id, nama, sumber link,nama admin,
                        kapan data dibuat dan kapan data di ubah sesuai dengan id --}}
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
                    {{-- card, untuk menampilkan deskripsi dari data berita sesuar dengan id --}}
                    <div class="card border-0 shadow-sm rounded flex-fill" style="background-color: #E3E3E3">
                        <div class="card-body">
                            <div class="p-1 m-0"><strong>Deskripsi berita :</strong><br>{{ $berita->deskripsi_berita }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" d-flex gap-3 justify-content-between flex-fill">
                {{-- sekelompok tombol pada setiap data kolom tabel beritas sesuai dengan id --}}
                {{-- form, untuk melakukan eksekusi proses hapus data --}}
                <form action="{{ route('admin_berita.hapus_data', $berita->id) }}" method="POST"
                    id="formHapusData_{{ $berita->id }}" onsubmit="return hapusData({{ $berita->id }})"
                    class="d-flex gap-3">
                    {{-- dugunakan untuk mengarah ke tampilan edit data sesuai dengan id --}}
                    <a href="{{ route('admin_berita.edit_data', $berita->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                </form>
                {{-- dugunakan untuk mengarah ke tampilan laman admin berita --}}
                <a href="{{ route('admin_berita.index') }}" class="btn btn-sm btn-dark">Kembali</a>
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
