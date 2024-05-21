
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pencarian Sipupuk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/sipupuk.css') }}" />
    </head>

    <body>

        @include("component.navbaru")
        
        <div class="container-custom">
            <header class="border-bottom mb-4 header-container">
                <img src="{{ asset('storage/image/bg-sipupuk.jpg') }}"  class="header-image img-filter" alt="Deskripsi Gambar">
                <div class="container" style="margin-top: -350px; z-index:2;">
                    <div class="text-center my-5">
                        <h1 class="fw-bold pt-5 fs-1 text-glow text-white">HASIL PENCARIAN</h1>
                        <p class="lead mb-0 fs-6 text-white ">Sistem Informasi Pupuk 
                            adalah sistem informasi <br> yang membantu dalam memberikan informasi tentang pupuk
                        </p>
                    </div>
                </div>
            </header>

        <div class="container">
            <div class="d-flex justify-content-between border-bottom mb-3 ">
                    <a  class="btn-kembali"  href="{{ route('sipupuk.index') }}">
                        Kembali 
                    </a>
                <h3 class="fw-bold warna-hijau mb-4">Artikel Yang Ditemukan</h3>
            </div>

            <div style="width: 100%;">
                <div class="row mb-3">
                    @forelse ($sipupuks as $sipupuk)
                    <div class="col-md-3">
                        <div class="card mb-3 shadow animate-card" style="width: 20rem; height: 25rem; display: flex; flex-direction: column; justify-content: space-between;">
                            <img src="{{ $sipupuk->image }}" class="img-animate" alt="{{ $sipupuk->title }}" style="object-fit: cover; width: 100%; height: 160px;" class="card-img-top">
                            <div class="card-body" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                <div>
                                    <h5 class="card-title lh-sm">{{ Str::limit($sipupuk->title, 70) }}</h5>
                                    <p class="card-text lh-sm">{{ Str::limit(strip_tags($sipupuk->content, 50)) }}</p>
                                </div>
                                <button class="btn" style="background-color: #224038;">
                                    <a class="text-decoration-none text-white" href="#">BACA SELENGKAPNYA <i class="bi bi-arrow-right"></i></a>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    @empty
                        <div class="alert bg-body-secondary text-black text-center col-lg-12">
                            Artikel belum Tersedia.
                        </div>
                    @endforelse
                </div>

        </div>


                <div class="container d-flex justify-content-center border-top" style="width: 100%;">
                    <!--Pagination-->
                    <nav aria-label="Pagination">
                        <ul class="pagination my-4">
                            @if ($sipupuks->onFirstPage())
                                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                    <span class="page-link" aria-hidden="true">Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $sipupuks->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Previous</a>
                                </li>
                            @endif
                
                
                            @if ($sipupuks->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $sipupuks->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                                </li>
                            @else
                                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                    <span class="page-link" aria-hidden="true">Next</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                    <!--End Pagination-->
                </div>
        </div>

        <div>
            @include('component.footer')
        </div>

    </body>
</html>

