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
    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
        }
    </style>
    <body class="bg-secondary ">

        <header class="bg-dark text-white p-4">
            <div class="container d-flex  justify-content-between">
                <a href="{{ route('adminsipupuk.index') }}" class="btn btn-secondary align-content-start">KEMBALI</a>
                <h2>Preview Artikel</h2>
                <a href="#" class="btn btn-primary">Edit Artikel</a>
            </div>
        {{-- <a href="{{ route('adminpupuk.edit', $sipupuks->id) }}" class="btn btn-primary">Edit</a> --}}
        </header>

        <div class="container bg-light "> <!--Body Pembungkus -->
            <!-- Responsive navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <div class="container">
                    <a class="navbar-brand text-light" href="#!">Start Bootstrap</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-custom mt-5" style="width: 70%; margin: auto;">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $sipupuks->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on {{ $sipupuks->created_at->format('d F Y') }} by {{ $sipupuks->author }}</div>
                    </header>
                    <!-- Preview image figure-->
                    {{-- <figure class="mb-4" style="width: 100%;"><img class="rounded" 
                        style="width: 100%; height: 450px; object-fit: cover;" alt="..."
                        src="{{ asset('public/storage/sipupuk'.$sipupuks->image) }}"/>
    
                    </figure> --}}
                    <img src="{{ asset('public/storage/sipupuk/'.$sipupuks->image) }}" class="img-fluid" alt="Gambar Artikel">
                    <!-- Post content-->
                    <section class="mb-5">
                        
                            {{-- {{ $sipupuks->content }} --}}
                            {!! html_entity_decode(($sipupuks->content)) !!}
                        
                    </section>
                </article>
            </div>
            <!-- Footer-->
            <footer class="py-5 bg-dark">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
            </footer>


        </div>
        <!-- Page content-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
