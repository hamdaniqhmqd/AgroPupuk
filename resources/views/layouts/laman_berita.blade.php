<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>{{ isset($title) ? $title . '' : '' }}</title> --}}
    <title> Berita | AGROPUPUK </title>
    {{-- link bs --}}
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    <!-- Repo Animasi AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .carousel-inner::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: 5;
        }

        .wave {
            width: 100%;
            object-fit: fill;
            bottom: -10px;
            height: 200px;
            position: absolute;
            z-index: 10;
        }
    </style>
</head>

<body style="background-color: #F4F8FA">

    @include('component.navbaru')
    {{-- ojo di ubah corosel ku, mergane wes tak setting --}}
    <div id="carouselExampleSlidesOnly" class="carousel slide"data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            @foreach ($corosel as $data)
                <div class="carousel-item active position-relative">
                    <img src="{{ asset('storage/gambar corosel/' . $data->image) }}"
                        style="width: 100%; height: 700px; object-fit: cover;" class="d-block object-fit-cover"
                        alt="gambar1" />
                </div>
            @endforeach
        </div>
        <img class="wave" src="{{ asset('storage/image/wave_berita.png') }}" alt="" srcset="">
        <!--Ini konten diatas corousel-->
    </div>

    @yield('content_berita')

    @include('component.footer')

    <!-- Script Buat Animasi AUOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
