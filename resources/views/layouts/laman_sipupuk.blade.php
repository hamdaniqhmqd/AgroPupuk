
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
            font-family: 'Poppins', sans-serif;
        }

        .container-custom {
            width: 100%;
            height: auto;
        }
    </style>
    <body>
        

        @include('component.navbaru')

        <div class="container-custom">
            <header class="py-5 bg-success border-bottom mb-4" style="width: 100%; height:400px;">
                <div class="container">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder pt-5">WELCOME TO SI PUPUK</h1>
                        <p class="lead mb-0">Sistem Informasi Pupuk 
                            adalah sistem informasi yang membantu dalam manajemen pupuk secara efisien.
                        </p>
                    </div>
                </div>
            </header>

        <div class="container">
            
            <div class="d-flex justify-content-between">

                <h2 class="fw-bold mb-4">Artikel On Going</h2>

                <form class="input-group " style="width: 25%; height:30px;" action="{{ route('search') }}" method="GET">
                    <input class="form-control" type="search" placeholder="Masukkan kata kunci..." aria-label="Masukkan kata kunci..." 
                        aria-describedby="button-search" name="search" />
                    <button class="btn btn-primary" id="button-search" type="submit" style="background-color: green;">Cari!</button>
                </form>
                
            </div>

                <div style="width: 100%;">
                    <div class="row">
                        @forelse ($sipupuks as $sipupuk)
                            <div class="col-lg-4">
                                <div class="card mb-4" style="height: 300px;">
                                    <a href="#!"> <img class="card-img-top" src="{{ asset('storage/sipupuk/'.$sipupuk->image) }}" alt="..." style="width: 100%; height: 100%;"/> </a>
                                    <div class="card-body">
                                        <div class="small text-muted">Di Upload {{ $sipupuk->created_at->format('d F Y') }}</div>
                                        <h2 class="card-title">{{ $sipupuk->title }}</h2>
                                        <p class="card-text"> {!! Str::limit($sipupuk->content, 50) !!}</p>
                                        {{-- <p class="card-text">{{ Str::limit($sipupuk->content, 50) }}</p> --}}
                                        <a class="btn btn-primary" href="{{ route('sipupuk.show', $sipupuk->id) }}"  style="background-color: green;">Baca selengkapnya →</a>
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

