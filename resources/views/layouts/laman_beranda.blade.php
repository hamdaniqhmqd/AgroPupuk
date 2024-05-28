<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beranda | AGROPUPUK </title>
    <!--CDN BOOTSTRAPE-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!--font popins-->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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




<body>

    <!--Navbar -->
    @include('component.navbaru')
    <!-- End Navbar -->

    <!-- Ini Corousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide"data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            @foreach ($corosel as $data)
                <div class="carousel-item active position-relative">
                    <img src="{{ asset('storage/gambar corosel/' . $data->image) }}"
                        style="width: 100%; height: 700px; object-fit: cover;" class="gambar-coro d-block object-fit-cover"
                        alt="{{ $data->image }}" />
                </div>
            @endforeach
        </div>
        {{-- <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="{{ asset('storage/image/coro1.png') }}"
                    style="width: 100%; height: 700px; object-fit: cover;" class="gambar-coro  d-block object-fit-cover"
                    alt="gambar1" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/image/coro2.png') }}"
                    style="width: 100%; height: 700px; object-fit: cover;" class="gambar-coro d-block object-fit-cover"
                    alt="gambar2" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/image/coro3.png') }}"
                    style="width: 100%; height: 700px; object-fit: cover;" class="gambar-coro d-block object-fit-cover"
                    alt="gambar3" />
            </div>
        </div> --}}
        <!--Ini konten diatas corousel-->
    </div>
    <div class="kotak-konten shadow ">
        <div class="svgku">
            <!--ini wave-->
        </div>
        <div class="konten ">
            <div class="container kontendalam ">
                <div class="bungkus-teks" data-aos="fade-right" data-aos-delay="50"
                data-aos-duration="2000" > <!--Animasi Aos -->
                    <div class="bungkus-animasi">
                        <h1 class="ttg-kami " data-text="Tentang Kami" data-aos-delay="100" >Tentang Kami</h1>
                    </div>
                    <p class="warna-abu-hitam my-3 " data-aos-delay="200">
                        AgroPupuk adalah salah satu website yang membatu para <br />
                        petani agar mudah mencari informasi tentang berbagai <br />
                        hal yang berkaitan dengan pupuk.</p>
                    <div class="btn-selengkapnya">
                    <a class="text-decoration-none  mt-4 btn-selengkapnyaa"
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


        <div class="w-100 bg-hijau shadow" style="height: 400px; margin-bottom: 7%;">
            <img src="{{ asset('storage/image/bgImg.png') }}" class="img-fluid-custom"  alt=" Galeri 2" />
            <h1 class="fw-bold text-center position-relative text-white fs-full">AGROPUPUK</h1>
            <h3 class=" text-center position-relative text-white fs-end overflow-hidden">

                hadir sebagai mitra terpercaya bagi para petani di Indonesia. Kami menyediakan berbagai jenis pupuk berkualitas tinggi, <br>
                baik organik maupun kimia, untuk memenuhi kebutuhan budidaya tanaman Anda. Tak hanya itu, <br>
                kami juga menawarkan informasi pertanian yang lengkap dan terkini
                untuk membantu Anda <br> meningkatkan hasil panen dan mencapai kesuksesan dalam bertani.

            </h3>
        </div>

        <div class="container mb ">
            <div class="w-100">
                <div class="img-custom" data-aos="fade-down"  data-aos-offset="100" data-aos-easing="ease-in-sine">
                    <img src="{{ asset('storage/image/galeriimg1.jpg') }}" class="img-fluid-custom rounded-3  hover-img "  alt="Galeri 1" />
                    {{-- <h1 class="fw-bold position-relative text-white fs-full">GALERI</h1> --}}
                </div>
                <div class="d-flex m-top-2 w-100 ">
                        <div class="w-30 " data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <img src="{{ asset('storage/image/galeriimg2.jpg') }}" class="img-fluid-custom rounded-3 hover-img "  alt=" Galeri 2" />
                        </div>
                        <div class="w-30 margin-2"  data-aos="fade-up"  data-aos-offset="200" data-aos-easing="ease-in-sine" >
                            <img src="{{ asset('storage/image/galeriimg3.png') }}" class="img-fluid-custom rounded-3 hover-img "  alt=" Galeri 3" />
                        </div>
                        <div class="w-35 margin-2 " data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <img src="{{ asset('storage/image/galeriimg4.png') }}" class="img-fluid-custom rounded-3 hover-img"  alt=" Galeri 4" />
                        </div>
                </div>

            </div>

        </div>

        <!--Benner AgroPupuk-->
        @include('component.banner')
        <!-- end Benner AgroPupuk-->



        <!-- Artike Prodduk -->

        @include('component.artikel_beranda')

        <!-- end Artike Prodduk -->

        <!--Benner AgroPupuk-->
        @include('component.banner')
        <!-- end Benner AgroPupuk-->

        <!-- Start Berita AgroPupuk-->
        @include('component.berita_laman_beranda')
        <!-- end Berita AgroPupuk-->

        <!--Our Grub -->
        <div class="our-grub d-flex justify-content-center align-items-center">
            <h1 class="text-white fs-4 fw-bold ">Our Groups</h1>
        </div>

        <!-- logo corp groups -->
        @include('component.corp_beranda')
        <!--end our groups -->

        @include('component.contactus_beranda')
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
