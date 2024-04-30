<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Post - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/sipupuk.css') }}" />
    </head>
    <body>


        @include('component.navbaru')

            <div class="container-artikel mt-5">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!--Link -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a  href="{{ route('sipupuk.index') }}" >Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Article</li>
                            </ol>
                        </nav>
                        <!-- Post title-->
                        <h1 class="fw-bolder warna-hijau mb-1">{{ $sipupuks->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted mb-2">Posted on {{ $sipupuks->created_at->format('d F Y') }} by {{ $sipupuks->author }}</div>
                    </header>
                    <!-- Preview image figure-->
                    <img src="{{ asset('storage/sipupuks/'.$sipupuk->image) }}" class="img-fluid" alt="Gambar Artikel">
                    <!-- Post content-->
                    <section class="mb-5">
                        
                            {{-- {{ $sipupuks->content }} --}}
                            {!! html_entity_decode(($sipupuks->content)) !!}
                        
                    </section>
                </article>
            </div>
            <!-- Footer-->
            @include('component.footer')


        </div>
        <!-- Page content-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
