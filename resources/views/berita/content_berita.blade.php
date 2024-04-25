@extends('layouts.laman_berita')
@section('content_berita')
<style>

</style>
    <div class="container pt-5">
        <div class="row m-2 mb-5 mt-2">
            <div class="col-md-6">
                <h2 class="fw-bold">Berita</h2>
            </div>
            <div class="col-md-6">
                <div class="align-content-end gelombang">
                    {{-- sebuah form yang berisi kolom inputan yang digunakan untuk melakukan pencarian
                        dengan mengirim nilai sesuai dengan atribut value --}}
                    <form action="{{ route('berita.index') }}" class="d-flex" method="GET">
                        <input class="form-control me-2" type="text" placeholder="Ketik berita yang di cari"
                            name="pencarian" value="{{ $request->get('pencarian') }}">
                    </form>
                </div>
            </div>
            <hr style="border: 2px solid #224038;" class="mt-5">
        </div>
        {{-- untuk menampilkan data berita terbaru --}}
        <div class="row m-2">
            <div class="col-md-9">
                <div class="d-flex flex-wrap justify-content-start">
                    {{-- sebuah perulangan dengan mengambil data dari variabel $berita dan di masukan ke variabel $data
                        jika ada data dari tabel data beritas maka akan menampilkan data tersebut --}}
                    @forelse ($berita as $data)
                        <div class="card m-2 border-0 hover" style="width: 250px;height: 300px;">
                            <img src="{{ asset('/storage/gambar berita/' . $data->image) }}"
                                class="card-img-top object-fit-cover rounded" alt="{{ $data->image }}"
                                style="height: 145px;">
                            <div class="card-body m-1 p-2">
                                <h5 class="card-title" style="height: 48px; overflow: hidden;">{{ $data->name }}</h5>
                                <p class="card-text" style="height: 48px; overflow: hidden">{{ $data->description }}</p>
                                <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{ $data->link }}"
                                    target="_blank">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    @empty {{-- digunakan untuk menampilkan pesan jika data di dalam beritas kosong --}}
                        <div class="alert alert-danger">
                            {{-- jika terdapat nilai dari variabel $request yang mengambil data dari nilai pencarian --}}
                            @if ($request->get('pencarian'))
                                Data {{ $request->get('pencarian') }} tidak ditemukan.
                            @else
                                {{-- jika tidak terdapat nilai dari variabel $request maka akan menampilakan pesan dibawah --}}
                                Data berita tidak ditemukan.
                            @endif
                        </div>
                    @endforelse
                </div>
            </div>
            {{-- untuk menampilkan data berita terkini --}}
            <div class="col-md-3">
                <div class="d-flex flex-wrap">
                    {{-- sebuah perulangan dengan mengambil data dari variabel $beritaSide dan di masukan ke variabel $data
                        jika ada data dari tabel data beritas maka akan menampilkan data tersebut --}}
                    @forelse ($beritaSide as $data)
                        <div class="card m-2 border-0 hover" style="width: 250px; height: 110px;">
                            <div class="card-body">
                                <h5 class="card-title"  style="height: 48px; overflow: hidden;">{{ $data->name }}</h5>
                                <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{ $data->link }}">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    @empty {{-- digunakan untuk menampilkan pesan jika data di dalam beritas kosong --}}
                        <div class="alert alert-danger">
                            Data berita tidak ditemukan.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
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
                    <a class="page-link" href="{{ $berita->url($i) }}">{{ $i }}</a> {{-- untuk tautan ke setiap tab paginasi --}}
                </li>
            @endfor
            {{-- list, jika ada data tab setelah dari tab yang di kunjungi saat itu
                maka akan mengaktifkan tombol selanjutnya dan berlaku untuk kebalikannya --}}
            <li class="page-item {{ $berita->nextPageUrl() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $berita->nextPageUrl() }}">Selanjutnya</a>
            </li>
        </ul>

        <hr style="border: 2px solid #224038;" class="mt-5 mb-5">
    </div>
@endsection
