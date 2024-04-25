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
    <!-- Repo Animasi AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .card-hover {
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        .card-hover:hover {
            background-color: white;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.25);
        }

        .kotak-konten {
            background-image: url('{{ asset('storage/image/wave.png') }}');
        }
    </style>
</head>




<body class="bg-abu">

    <!--Navbar -->
    @include('component.navbaru')
    <!-- End Navbar -->

    <!-- Ini Corousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide"data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="{{ asset('storage/image/coro1.png') }}"
                    style="width: 100%; height: 700px; object-fit: cover;" class="d-block object-fit-cover"
                    alt="gambar1" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/image/coro2.png') }}"
                    style="width: 100%; height: 700px; object-fit: cover;" class="d-block object-fit-cover"
                    alt="gambar2" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/image/coro3.png') }}"
                    style="width: 100%; height: 700px; object-fit: cover;" class="d-block object-fit-cover"
                    alt="gambar3" />
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
                <div class="bungkus-teks" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="2000" > <!--Animasi Aos -->
                    <div class="bungkus-animasi">
                        <h1 class="ttg-kami" data-text="Tentang Kami" data-aos-delay="100" >Tentang Kami</h1>
                    </div>
                    <p class="warna-abu-hitam fw-bold  my-3 " data-aos-delay="200">
                        AgroPupuk adalah salah satu website yang membatu para <br />
                        petani agar mudah mencari informasi tentang berbagai <br />
                        hal yang berkaitan dengan pupuk.</p>
                    <div class="btn-selengkapnya">
                    <a class="text-decoration-none text-white btn-hijau mt-4 btn-selengkapnyaa" 
                    type="button" href="{{ route('tentangkami') }}" data-aos-delay="300">Selengkapnya</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container-full">


        <!-- Info Prodduk -->
        @include('component.produk')
        <!-- Info Prodduk -->

        <!--Benner AgroPupuk-->
        @include('component.banner')
        <!-- end Benner AgroPupuk-->

        <!-- Start Berita AgroPupuk-->
        @include('component.berita')
        <!-- end Berita AgroPupuk-->

        <!--Our Grub -->
        <div class="our-grub d-flex justify-content-center align-items-center">
            <h1 class="text-white fs-1 fw-bold ">Our Groups</h1>
        </div>

        <!-- logo corp -->
        <div class="container">
            <div class="row row-cols-5 row-cols-md-5 row-cols-sm-5  g-4">
                <div class="col">
                    <div class="logo-corp justify-center align-content-center" data-aos="zoom-in" 
                    data-aos-duration="1500">
                        <img src="{{ asset('storage/image/petrokimia-gresik.png') }}" width="230" height="45">
                    </div>
                </div>
                <div class="col">
                    <div class="logo-corp justify-center align-content-center"data-aos="zoom-in" 
                    data-aos-delay="100" data-aos-duration="1500">
                        <img src="{{ asset('storage/image/pupuk-iskandar-muda.png') }}" width="230" height="43">
                    </div>
                </div>
                <div class="col">
                    <div class="logo-corp justify-center align-content-center" data-aos="zoom-in" 
                    data-aos-delay="200" data-aos-duration="1500">
                        <img src="{{ asset('storage/image/pupuk-kaltim.png') }}" width="230" height="43">
                    </div>
                </div>
                <div class="col">
                    <div class="logo-corp justify-center align-content-center" data-aos="zoom-in" 
                    data-aos-delay="300"
                    data-aos-duration="1500">
                        <img src="{{ asset('storage/image/pupuk-kujang.png') }}" width="230" height="43">
                    </div>
                </div>
                <div class="col">
                    <div class="logo-corp justify-center align-content-center" data-aos="zoom-in" 
                    data-aos-delay="400"
                    data-aos-duration="1500">
                        <img src="{{ asset('storage/image/pupuk-sriwijaya.png') }}" width="230" height="43">
                    </div>
                </div>
            </div>
        </div>
        <!--end our groups -->


        <!--end our groups -->
        <!--foooter-->
        @include('component.footer')
        <!--end footer-->




    </div> <!--Container Content-->

    <!-- Script Buat Animasi AUOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
