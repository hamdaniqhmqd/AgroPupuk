@extends('layouts.laman_berita')
@section('content_berita')
    <div class="container pt-5">
        <div class="row m-2 mb-5 mt-2">
            <div class="col-md-6">
                <h2 class="fw-bold">Berita</h2>
            </div>
            <div class="col-md-6">
                <div class="align-content-end">
                    <form action="{{ route('berita.index') }}" class="d-flex" method="GET">
                        <input class="form-control me-2" type="text" placeholder="Ketik berita yang di cari"
                            name="search" value="{{ $request->get('search') }}">
                    </form>
                </div>
            </div>
            <hr style="border: 2px solid #224038;" class="mt-5">
        </div>
        <div class="row m-2">
            <div class="col-md-9">
                <div class="d-flex flex-wrap justify-content-start">
                    @forelse ($berita as $data)
                        <div class="card m-2 border-0 hover" style="width: 250px;height: 300px;">
                            <img src="/storage/Berita/zee.jpg" class="card-img-top object-fit-cover rounded" alt="card"
                                style="height: 150px;">
                            <div class="card-body m-1 p-2">
                                <h5 class="card-title fw-medium">{{ $data->name }}</h5>
                                <p class="card-text fw-light">{{ $data->description }}</p>
                                <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{ $data->link }}">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger">
                            Data berita tidak ditemukan.
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex flex-wrap">
                    @forelse ($beritaSide as $data)
                        <div class="card m-2 border-0 hover" style="width: 250px; height: 110px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->title }}</h5>
                                <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{ $data->link }}">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger">
                            Data Mahasiswa tidak ditemukan.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <ul class="pagination d-flex justify-content-start">
            <li class="page-item {{ $berita->previousPageUrl() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $berita->previousPageUrl() }}">Sebelumnya</a>
            </li>
            @for ($i = 1; $i <= $berita->lastPage(); $i++)
                <li class="page-item {{ $berita->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $berita->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item {{ $berita->nextPageUrl() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $berita->nextPageUrl() }}">Selanjutnya</a>
            </li>
        </ul>

        <hr style="border: 2px solid #224038;" class="mt-5 mb-5">
    </div>
@endsection
