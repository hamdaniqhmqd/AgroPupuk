@extends('layouts.laman_utama')
@section('content_laman_utama')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded">
                    <div class="card-body" style="background-color: #E3E3E3">
                        <div class="row m-2 mr-3 ml-3">
                            <div class="col-md-6">
                                <h2 class="">Berita Trending</h2>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <div class="align-content-end">
                                    <a class="btn" style="background-color: #224038; color: #E3E3E3">Lihat semua</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-center">
                            @forelse ($berita as $data)
                                <div class="card m-2 border-0 hover" style="width: 250px;">
                                    <img src="{{ asset('/storage/berita/' . $data->image) }}" class="card-img-top object-fit-cover rounded"
                                        alt="card" style="height: 150px;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $data->name }}</h5>
                                        <p class="card-text">{{ $data->description }}</p>
                                        <a class="link-offset-2 link-underline link-underline-opacity-0"
                                            href="{{ $data->link }}">
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
                </div>
            </div>
        </div>
    </div>
@endsection
