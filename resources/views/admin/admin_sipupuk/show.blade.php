<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Preview Artikel</title>
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

        .bg-hijau {
            background-color: #224038;
        }
    </style>
    <body class="bg-secondary ">

        <header class="bg-hijau text-white p-4">
            <div class="container d-flex  justify-content-between">
                <a href="{{ route('adminsipupuk.index') }}" type="button" class="btn btn-outline-light my-1  fw-semibold align-content-start">KEMBALI</a>
                <h2>Preview Artikel</h2>
                <a  href="{{ route('adminsipupuk.edit', $sipupuks->id) }}" type="button" class="btn btn-outline-light my-1 ">Edit Artikel</a>
            </div>
        {{-- <a href="{{ route('adminpupuk.edit', $sipupuks->id) }}" class="btn btn-primary">Edit</a> --}}
        </header>

        <div class="w-100 bg-light "> <!--Body Pembungkus -->
            <div class="container-custom pt-5" style="width: 65%; margin: auto; font-family: Inter , sans-serif;
            white-space: wrap; text-align: justify;">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $sipupuks->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on {{ $sipupuks->created_at->format('d F Y') }} by {{ $sipupuks->author }}</div>
                    </header>

                    
                    <img src="{{ asset('storage/gambar_sipupuk/' . $sipupuks->image) }}" class="img-fluid w-100"  alt="Gambar Artikel">
                    <!-- Post content-->
                    <section class="mb-5 mt-3">
                            {!! html_entity_decode(($sipupuks->content)) !!}
                        
                    </section>
                </article>
            </div>
            <!-- Footer-->
            <footer class="py-3 bg-hijau container-fluid">
            </footer>


        </div>
        <!-- Page content-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
