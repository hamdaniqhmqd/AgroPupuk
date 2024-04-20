<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beranda Agropupuk</title>
    <!--CDN BOOTSTRAPE-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!--font popins-->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}" />
    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .kotak-konten {
            background-image: url('{{ asset('storage/image/wave.png') }}');
        }
    </style>
</head>




<body class="bg-abu">

    <!--Navbar -->
    @include('component.nav')
    <!-- End Navbar -->

    <!-- Ini Corousel -->
    <div class="container-full">
        <div id="carouselExampleSlidesOnly" class="carousel slide"data-bs-ride="carousel" data-bs-interval="1500">
            <div class="carousel-inner">
                <div class="carousel-item active position-relative w-100 h-100">
                    <img src="{{ asset('storage/image/coro1.png') }}"
                        class="d-block w-100 object-fit-cover"alt="gambar1" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/image/coro2.png') }}" class="d-block w-100" alt="gabar2" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/image/coro3.png') }}" class="d-block w-100" alt="gamabar3" />
                </div>
            </div>
            <!--Ini konten diatas corousel-->
        </div>
        <div class="kotak-konten shadow-lg ">
            <div class="svgku">
                <!--ini wave-->
            </div>
            <div class="konten ">
                <div class="container kontendalam ">
                    <div class="">
                        <h1 class="fw-bolder fs-1 -ml-6S warna-hijau mt-5 ">Tentang Kami</h1>
                        <p class="warna-abu-hitam fs-5 fw-bold  my-3 ">
                            AgroPupuk adalah salah satu website yang membatu para <br />
                            petani agar mudah mencari informasi tentang berbagai <br />
                            hal yang berkaitan dengan pupuk.</p>
                        <div class="btn-selengkapnya">
                            <a class="text-decoration-none text-white btn-hijau mt-4 " type="button"
                                href="#">Selengkapnya</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Info Prodduk -->
        @include('component.produk')
        <!-- Info Prodduk -->

        <!--Benner AgroPupuk-->
        @include('component.banner')
        <!-- end Benner AgroPupuk-->

        <!-- Start Berita AgroPupuk-->
        {{-- <div class="container mt-5 mb-5 ">
            <div class="row row-cols-4  row-cols-md-4 row-cols-sm-4  g-4">
                <div class="col">
                    <div class="produk-card">

                    </div>

                </div>
                <div class="col">
                    <div class="produk-card">

                    </div>

                </div>
                <div class="col">
                    <div class="produk-card">

                    </div>

                </div>
                <div class="col">
                    <div class="produk-card">

                    </div>
                </div>
            </div>
        </div> --}}
        @include('component.berita')
        <!-- end Berita AgroPupuk-->

        <!--Our Grub -->
        <div class="our-grub d-flex justify-content-center align-items-center">
            <h1 class="text-white fs-1 fw-bold ">Our Groups</h1>
        </div>




        <!--end our groups -->
        <!--foooter-->
        @include('component.footer')
        <!--end footer-->




    </div> <!--Container Content-->



</body>

</html>
