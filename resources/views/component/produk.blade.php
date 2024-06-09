<!-- Info Prodduk -->
<div class="content-produk ">
    <!-- Ini Text Info Produk-->
    <h1 class="fs-1 z-2 pt-5 fw-bold warna-hijau text-center" data-aos="fade-up" data-aos-delay="100"
        data-aos-duration="1500">Informasi Produk</h1>
    <p class="z-2 warna-abu-hitam fs-6 text-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
        Produk yang kita tampilkan merupakan produk <br>
        terbaru yang tersedia.</p>
</div>
<!-- start Conrtainer Card-->
<div class="container mt-5 mb-5 ">
    <!-- Kotak-kotak start Area -->
    <!-- Mulai Perulangan untuk Membuat Card -->
    <div class="container">
        <div class="kotak-kotak" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
            @foreach ($Produk as $item)
                @csrf
                <div class="kotak-luar">
                    <div class="kotak-dalam">
                        <img src="{{ asset('storage/gambarproduk/' . $item->image) }}" alt="{{ $item->image }}">
                    </div>
                    <div class="kotak-hijau">
                        <button type="button" class="btn btn-success custom-disabled">Beli Produk</button>
                    </div>
                    <p class="f-produk">{{ $item->title }}</p>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Selesai Perulangan -->
</div>
<!-- End Conrtainer Card-->
<!-- Info Prodduk -->




<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<!-- Repo Animasi AOS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!-- Script Buat Animasi AUOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<style>
    /* Card Start */
    .kotak-luar {
        background-color: #FFFFFF;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 10px;
        position: relative;
        box-shadow: 0px 0px 10px rgba(61, 61, 61, 0.6);
        transition: transform 0.5s ease;
        width: 264px;
        height: 330px;
        overflow: hidden;
        margin: 20px 0;
    }

    .kotak-dalam {
        width: 100%;
        height: 100%;
        background-color: #e3e3e3;
        margin-bottom: 37px;
    }

    .kotak-dalam img {
        width: 100%;
        height: 100%;
    }

    .kotak-hijau .btn {
        width: 110px;
        height: 25px;
        background-color: hsl(164, 30.61%, 19.22%);
        position: absolute;
        bottom: 63px;
        z-index: 1;
        left: 3.5px;
        font-size: 13.5px;
        padding-top: 7px;
        padding-bottom: 27px;
        border: 0;
        border-radius: 2;
    }

    .f-produk {
        font-weight: 600 !important;
        font-size: 1.25rem;
        margin-left: 15px;
        margin-bottom: 15px;
        margin-top: -5px;
    }

    .kotak-kotak {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        place-items: center;
        width: 100%;
        height: auto;
        margin-bottom: 100px;
    }

    .kotak-luar:hover {
        transform: scale(1.04);
        cursor: pointer;
    }

    .btn-success {
        width: 150px;
        margin-left: 20px;
        background-color: #224038 !important;
    }

    /* Card end */

    @media only screen and (max-width: 800px) {

        .kotak-kotak {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
            place-items: center;
            width: 100%;
            height: auto;
            margin-bottom: 100px;
        }
    }


    @media only screen and (max-width: 1080px) {
        .kotak-kotak {
            display: grid;
            grid-template-columns: repeat(0, 1fr 1fr 1fr);
            grid-gap: 8px;
            /* Atur jarak antar elemen grid */
            place-items: center;
            width: 100%;
            height: auto;
            margin-bottom: 90px;
        }

        .kotak-luar {
            background-color: #FFFFFF;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 5px;
            position: relative;
            box-shadow: 0px 0px 10px rgba(61, 61, 61, 0.6);
            transition: transform 0.5s ease;
            width: 220px;
            /* Ubah lebar elemen grid */
            height: 280px;
            /* Ubah tinggi elemen grid */
            margin: 8px 0;
            overflow: hidden;
        }

        .f-produk {
            font-weight: 600 !important;
            font-size: 1rem;
            margin-left: 12px;
            margin-bottom: 12px;
        }

        .btn-success {
            width: 120px;
            margin-left: 15px;
            background-color: #224038 !important;
        }

        .kotak-hijau .btn {
            width: 110px;
            height: 25px;
            background-color: hsl(164, 30.61%, 19.22%);
            position: absolute;
            bottom: 55px;
            z-index: 1;
            left: 3.5px;
            font-size: 13.5px;
            padding-top: 7px;
            padding-bottom: 27px;
            border: 0;
            border-radius: 2;
        }
    }

    @media only screen and (max-width: 1172px) {
        .kotak-kotak {
            display: grid;
            grid-template-columns: repeat(0, 1fr 1fr 1fr);
            grid-gap: 8px;
            /* Atur jarak antar elemen grid */
            place-items: center;
            width: 100%;
            height: auto;
            margin-bottom: 90px;
        }

        .kotak-luar {
            background-color: #FFFFFF;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 5px;
            position: relative;
            box-shadow: 0px 0px 10px rgba(61, 61, 61, 0.6);
            transition: transform 0.5s ease;
            width: 215px;
            /* Ubah lebar elemen grid */
            height: 290px;
            /* Ubah tinggi elemen grid */
            margin: 8px 0;
            overflow: hidden;
        }

        .f-produk {
            font-weight: 600 !important;
            font-size: 1rem;
            margin-left: 12px;
            margin-bottom: 12px;
        }

        .btn-success {
            width: 120px;
            margin-left: 15px;
            background-color: #224038 !important;
        }

        .kotak-hijau .btn {
            width: 110px;
            height: 25px;
            background-color: hsl(164, 30.61%, 19.22%);
            position: absolute;
            bottom: 55px;
            z-index: 1;
            left: 3.5px;
            font-size: 13.5px;
            padding-top: 7px;
            padding-bottom: 27px;
            border: 0;
            border-radius: 2;
        }
    }


    @media only screen and (max-width: 600px) {
        .kotak-kotak {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
            place-items: center;
            width: 100%;
            height: auto;
            margin-bottom: 100px;
        }

        .kotak-luar {
            background-color: #FFFFFF;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 5px;
            position: relative;
            box-shadow: 0px 0px 10px rgba(61, 61, 61, 0.6);
            transition: transform 0.5s ease;
            width: 220px;
            height: 280px;
            overflow: hidden;
            margin: 8px 0;
        }

        .f-produk {
            font-weight: 600 !important;
            font-size: 1rem;
            margin-left: 12px;
            margin-bottom: 12px;
            /* margin-top: -10px; */
        }

        .btn-success {
            width: 120px;
            margin-left: 15px;
            background-color: #224038 !important;
        }

        .kotak-hijau .btn {
            width: 110px;
            height: 25px;
            background-color: hsl(164, 30.61%, 19.22%);
            position: absolute;
            bottom: 55px;
            z-index: 1;
            left: 3.5px;
            font-size: 13.5px;
            padding-top: 7px;
            padding-bottom: 27px;
            border: 0;
            border-radius: 2;
        }
    }
</style>
