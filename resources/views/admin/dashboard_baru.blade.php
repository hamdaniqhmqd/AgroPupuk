@extends('layouts.laman_admin_dashboard')
@section('admin_dashboard')
    <style>
        .warna-hijau {
            color: #224038;
        }

        .warna-hijau-muda {
            color: #2f725f;
        }
        .text-unline {
            text-decoration: none;
            list-style: none;

        }
    </style>
    <div class="container-full">
        <header class="position-relative d-flex align-items-center justify-content-between">
            <div class="page">
                <span class="list_page">{{ $title }}</span>
            </div>

            <div class="profile d-flex align-items-center">

                <span class="nama_admin">{{ $admin->nama }}</span>
                @if (auth()->user()->gambar)
                    <img class="object-fit-fill rounded" src="{{ asset('storage/profile/' . $admin->gambar) }}" alt="profile"
                        loading="lazy" />
                @else
                    <img class="object-fit-fill rounded" src="{{ asset('/gambar/user.png') }}" alt="profile"
                        loading="lazy" />
                @endif
            </div>
        </header>
        <div class="container-content">
            <div style="width: 90%; margin: auto">
                <h3 class="mt-5 py-2 fs-3 warna-hijau">Welcome, <span class="fw-bold text-uppercase">{{ $admin->nama }}</span></h3>
                <div class="card mt-3 w-100 bg-ligth rounded-3 border-2 shadow">
                    <div class="w-75 m-auto d-flex"">
                        <div class="text-start pt-5">
                            <p class="warna-hijau-muda">
                                SELAMAT DATANG DI DASHBOARD ADMIN AGROPUPUK
                            </p>
                            <h5 class="fw-bold warna-hijau fs-4">
                                PERIKSA, KELOLA DAN BAGIKAN INFORMASI<br>
                                TENTANG PERTANIAN YANG BERMANFAAT UNTUK <br>
                                PETANI DAN MASYARAKAT.
                            </h5>
                        </div>
                        <div class="gambar-end">
                            <img src="{{ asset('storage/image/gambar-dashboard.svg') }}" alt="image dashboard"
                                style="width: 350px;">
                        </div>
                    </div>
                </div>
                <div class="mt-3 w-100">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card w-100 border-2 bg-li rounded shadow">
                                        <div class="d-flex w-75 m-auto justify-content-between">
                                            <h1 class="py-4 mb-0 fs-2 fw-bold warna-hijau">CONTENT<br>
                                                <span class="fs-2 fw-normal  warna-hijau-muda">MANAGEMENT</span>
                                            </h1>
                                            <img class="py-2 my-2" src="{{ asset('storage/image/dashboard_content.png') }}"
                                                style="width: 90px; height:105px;" alt="content dashboard">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card w-100 border-2 bg-li rounded shadow">
                                        <div class="d-flex w-75 m-auto justify-content-between">
                                            <h1 class="py-4 mb-0 fs-2 fw-bold warna-hijau">ARTICLE<br>
                                                <span class="fs-2 fw-normal  warna-hijau-muda">MANAGEMENT</span>
                                            </h1>
                                            <img class="py-2 my-2" src="{{ asset('storage/image/dashboard-artikel.png') }}"
                                                style="width: 90px; height:105px;" alt="content dashboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 ">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card w-100 border-2 bg-light rounded shadow">
                                        <div class="d-flex w-75 m-auto justify-content-between">
                                            <h1 class="py-4 mb-0 fs-2 fw-bold warna-hijau">PRODUCT<br>
                                                <span class="fs-2 fw-normal warna-hijau-muda">MANAGEMENT</span>
                                            </h1>
                                            <img class="py-2 my-2" src="{{ asset('storage/image/dashboard_produk.png') }}"
                                                style="width: 90px; height:105px;" alt="content dashboard">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card w-100 border-2 bg-li rounded shadow">
                                        <div class="d-flex w-75 m-auto justify-content-between">
                                            <h1 class="py-4 mb-0 fs-2 fw-bold warna-hijau">NEWS<br>
                                                <span class="fs-2 fw-normal warna-hijau-muda">MANAGEMENT</span>
                                            </h1>
                                            <img class="py-2 my-2" src="{{ asset('storage/image/dashboard_news.png') }}"
                                                style="width: 90px; height:105px;" alt="content dashboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/session.js') }}"></script>
@endsection
