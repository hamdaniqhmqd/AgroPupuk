<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard Admin</title>
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link Google Fonts untuk font Popins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>
<body>
    <div class="container-full">
        @include('component.sidebar_baru')
        
            <div class="container-content">
                <div style="width: 90%; margin: auto">
                        <h3 class="mt-5 py-2 fs-3 warna-hijau">Welcome, <span class="fw-bold">Admin</span></h3>
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
                                    <img src="{{ asset('storage/image/gambar-dashboard.svg') }}" alt="image dashboard" style="width: 350px;">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 w-100">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <button class="col-md-6">
                                            <a class="card border-1 w-100  bg-light rounded shadow">
                                                <div class="d-flex w-75 m-auto justify-content-between">
                                                <h1 class="py-4 mb-0 fs-2 fw-bold warna-hijau">CONTENT<br>
                                                    <span class="fs-2 fw-normal warna-hijau-muda">MANAGEMENT</span></h1>
                                                    <img class="py-2 my-2" src="{{ asset('storage/image/dashboard_content.png') }}" style="width: 90px; height:105px;" alt="content dashboard">
                                                </div>
                                            </a>
                                        </button>
                                        <div class="col-md-6">
                                            <div class="card w-100 border-2 bg-li rounded shadow">
                                                <div class="d-flex w-75 m-auto justify-content-between">
                                                    <h1 class="py-4 mb-0 fs-2 fw-bold warna-hijau">ARTICLE<br>
                                                        <span class="fs-2 fw-normal  warna-hijau-muda">MANAGEMENT</span></h1>
                                                        <img class="py-2 my-2" src="{{ asset('storage/image/dashboard-artikel.png') }}" style="width: 90px; height:105px;" alt="content dashboard">
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
                                                        <span class="fs-2 fw-normal warna-hijau-muda">MANAGEMENT</span></h1>
                                                        <img class="py-2 my-2" src="{{ asset('storage/image/dashboard_produk.png') }}" style="width: 90px; height:105px;" alt="content dashboard">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card w-100 border-2 bg-li rounded shadow">
                                                <div class="d-flex w-75 m-auto justify-content-between">
                                                    <h1 class="py-4 mb-0 fs-2 fw-bold warna-hijau">NEWS<br>
                                                        <span class="fs-2 fw-normal warna-hijau-muda">MANAGEMENT</span></h1>
                                                        <img class="py-2 my-2" src="{{ asset('storage/image/dashboard_news.png') }}" style="width: 90px; height:105px;" alt="content dashboard">
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

<!-- Bootstrap JS via CDN (Optional, jika diperlukan) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>