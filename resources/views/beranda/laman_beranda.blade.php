<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beranda Agropupuk</title>
    <link rel="stylesheet" href="style.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"/>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Poppins"
        rel="stylesheet"/>
</head>
<body class="bg-abu">

    <!-- Ini Navbar -->
        <nav
        class="w-100 px-5 ps-5 bg-hijau py-4 d-flex justify-content-between align-items-center">
        <a class="d-block w-25" href="">
            <!--Iamge Unruk logo di nav-->
            <img class="logoagro"src="./img/webpupuk.png"width="220"height="28"alt=""/>
        </a>
        <!--Text Nav-->
        <div class="w-50 px-0 text-center d-flex justify-content-around" id="navbarNavAltMarkup">
            <a class="nav-link active text-white" aria-current="page" href="#">Beranda</a>
            <a class="nav-link text-white" href="#">Produk</a>
            <a class="nav-link text-white" href="#">Berita</a>
            <a class="nav-link text-white" href="#">SiPupuk</a>
            <a class="nav-link text-white" href="#">Tentang Kami</a>
        </div>
        <!--End Text Nav-->
        <!--Hamburger Belom akktif-->
        <div class="hamburgermenu z-3">
            <span class="strip"></span>
            <span class="strip"></span>
            <span class="strip"></span>
        </div>
        <!-- End Hamburger Belom akktif-->
        </nav>
        <!-- Akhir Navbar -->

        <!-- Ini Corousel -->
        <div class="container-full">
        <div id="carouselExampleSlidesOnly" class="carousel slide"data-bs-ride="carousel" data-bs-interval="1500">
            <div class="carousel-inner">
            <div class="carousel-item active position-relative w-100 h-100">
                <img src="./img/image 1.png"class="d-block w-100 object-fit-cover"alt="gambar1"/>
            </div>
            <div class="carousel-item">
                <img src="./img/image 3.png" class="d-block w-100" alt="gabar2" />
            </div>
            <div class="carousel-item">
                <img src="./img/IMG 3.png" class="d-block w-100" alt="gamabar3" />
            </div>
            </div>
            <!--Ini konten diatas corousel-->
        </div>
        <div class="kotak-konten shadow-lg ">
            <div class="svgku">
            <!--ini wave-->
            </div>
            <div class="konten ">
                <div class="kontendalam ms-5  w-50">
                <h1 class="fw-bolder fs-1 warna-hijau mt-2">Tentang Kami</h1>
                <p class="warna-abu-hitam fs-5 m-0 ">
                    AgroPupuk adalah salah satu website yang membatu para <br/>
                    petani agar mudah mencari informasi tentang berbagai <br/>
                    hal yang berkaitan dengan pupuk.</p>
                <div class="">
                    <a class="text-decoration-none text-white btn-hijau mt-4 "  type="button" href="#">Selengkapnya</a>
                </div>
                </div>
            </div>
        </div>

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

        <!--Benner AgroPupuk-->
        <div class="bg-agro d-flex">
            <img src="./img/webpupuk.png" class=" my-lg-auto ps-5 " width="350" height="70" alt="agropupuk">
            <p class="sinergi my-lg-auto"> haha haha haha haha haha </p>
            
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


    </div> <!--Container Content-->



    </body>
</html>
