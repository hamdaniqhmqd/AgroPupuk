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
    @yield('content_navbar')
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
        <div class="content-produk bg-abu  ">
            <!-- Ini Text Info Produk-->
            <h1 class="fs-1 z-2 pt-5 fw-bold warna-hijau text-center  ">Informasi Produk</h1>
            <p class="z-2 warna-abu-hitam fs-6 text-center">
                Produk yang kita tampilkan merupakan produk <br>
                terbaru yang tersedia.</p>
        </div>
        <!-- start Conrtainer Card-->
        <div class="container mt-5 mb-5 ">
            <div class="row row-cols-4  row-cols-md-4 row-cols-sm-4  g-4">
                <!--Atur card-->
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
                <!--End card-->

            </div>

        </div>
        <!-- End Conrtainer Card-->
        <!-- Info Prodduk -->

        <!--Benner AgroPupuk-->
        <div class="bg-agro d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="d-lg-flex justify-content-between align-items-center">
                    <img src="{{ asset('storage/image/banner_pupuk.png') }}" class="my-lg-auto" width="400"
                        height="50" alt="agropupuk">
                    <div class="jarak-text d-flex">
                        <p class="my-lg-auto fs-5 text-white p-3 flex-fill">Satukan </p>
                        <p class="my-lg-auto fs-5 text-white p-3 flex-fill">Sinergi</p>
                        <p class="my-lg-auto fs-5 text-white p-3 flex-fill">Untuk</p>
                        <p class="my-lg-auto fs-5 text-white p-3 flex-fill">Petani</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Benner AgroPupuk-->

        <!-- Start Berita AgroPupuk-->
        <div class="container mt-5 mb-5 ">
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
        </div>
        <!-- end Berita AgroPupuk-->

        <!--Our Grub -->
        <div class="our-grub d-flex justify-content-center align-items-center">
            <h1 class="text-white fs-1 fw-bold ">Our Groups</h1>
        </div>




        <!--end our groups -->
        <!--foooter-->
        <!-- Remove the container if you want to extend the Footer to full width. -->
        <div class="container-full mt-5">
            <!-- Footer -->
            <footer class="text-center text-white bg-hijau">
                <!-- Grid container -->
                <div class="container">
                    <!-- Section: Links -->
                    <section class="mt-5">
                        <!-- Grid row-->
                        <div class="row text-center d-flex justify-content-center  pt-5">
                            <!-- Grid column -->
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="#!" class="text-white text-decoration-none">Tentang Kami</a>
                                </h6>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="#!" class="text-white text-decoration-none">ProduK</a>
                                </h6>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="#!" class="text-white text-decoration-none ">Si Pupuk</a>
                                </h6>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="#!" class="text-white text-decoration-none">Bantuan</a>
                                </h6>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="#!" class="text-white text-decoration-none">Kontak</a>
                                </h6>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row-->
                    </section>
                    <!-- Section: Links -->

                    <hr class="my-3" />
                    <!-- Section: Text -->
                    <section class="mb-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <img src="{{ asset('storage/image/banner_pupuk.png') }}" class="my-5"
                                    width="400" height="50" alt="agropupuk">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                                    distinctio earum repellat quaerat voluptatibus placeat nam,
                                    commodi optio pariatur est quia magnam eum harum corrupti
                                    dicta, aliquam sequi voluptate quas.
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- Section: Text -->

                    <!-- Section: Social -->
                    <section class="text-center mb-5">
                        <a href="" class="text-white me-5">
                            <i class="fab fa-facebook-f fs-4  text-decoration-none"></i>
                        </a>
                        <a href="" class="text-white me-5">
                            <i class="fab fa-twitter fs-4   text-decoration-none"></i>
                        </a>
                        <a href="" class="text-white me-5">
                            <i class="fab fa-google fs-4  text-decoration-none"></i>
                        </a>
                        <a href="" class="text-white me-5">
                            <i class="fab fa-instagram fs-4  text-decoration-none"></i>
                        </a>
                        <a href="" class="text-white me-5">
                            <i class="fab fa-linkedin fs-4  text-decoration-none"></i>
                        </a>
                        <a href="" class="text-white me-5">
                            <i class="fab fa-github fs-4 text-decoration-none"></i>
                        </a>
                    </section>
                    <!-- Section: Social -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)"> © 2024 Copyright:
                    <a class="text-white text-decoration-none" href="#">Agropupuk.com</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>
        <!-- End of .container -->
        <!--end footer-->




    </div> <!--Container Content-->



</body>

</html>
