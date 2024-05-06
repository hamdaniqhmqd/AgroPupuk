
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/sipupuk.css') }}" />
    </head>

    <body>

        @include("component.navbaru")
        
        <div class="container-fluid">
        <header class="py-5 bg-success border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">HASIL PENCARIAN</h1>
                    <p class="lead mb-0">Sistem Informasi Pupuk 
                        adalah sistem informasi yang membantu dalam manajemen pupuk secara efisien.
                    </p>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="d-flex justify-content-between border-bottom mb-3 ">
                <a class="btn btn-hijau " href="{{ route('sipupuk.index') }}">
                    Kembali 
                </a>
                <h3 class="fw-bold warna-hijau mb-4">Artikel Yang Ditemukan</h3>
            </div>

            <div style="width: 100%;">
                <div class="row">
                    @forelse ($sipupuks as $sipupuk)
                        <div class="col-lg-4">
                            <div class="card mb-4 shadow" style="height: 350px;">
                            
                                <a href="#!" style="width: 100%; height: 170px; overflow :hidden;"> <img class="card-img-top" src="{{ asset('storage/sipupuks/'.$sipupuk->image) }}" alt="{{ $sipupuk->title }}" style="objet-fit: contain;"/> </a>
                            
                                <div class="card-body" style="width: 90%; margin:auto;"  >
                                    <div class=" fs-kecil text-muted m-0">Di Upload {{ $sipupuk->created_at->format('d F Y') }}</div>
                                    <h2 class=" warna-hijau fw-bold  fs-besar my-1">{{ $sipupuk->title }}</h2>
                                    <p class=" fs-small mb-0 pb-0"> {!! Str::limit($sipupuk->content, 50) !!}</p>
                                    {{-- <p class="card-text">{{ Str::limit($sipupuk->content, 50) }}</p> --}}
                                    <a class="btn btn-primary py-2" href="{{ route('sipupuk.show', $sipupuk->id) }}"  style="background-color: #224038; border :none; font-size:13px; margin-top:-10px;">Baca selengkapnya →</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger col-lg-12">
                            Artikel belum Tersedia.
                        </div>
                    @endforelse
                </div>
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

