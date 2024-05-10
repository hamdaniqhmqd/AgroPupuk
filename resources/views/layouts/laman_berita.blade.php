<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . '' : '' }}</title>
    {{-- link bs --}}
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    <!-- Repo Animasi AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body style="background-color: #E3E3E3">

    @include('component.navbaru')
    <div id="carouselExampleSlidesOnly" class="carousel slide"data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="{{ asset('storage/image/coro1.png') }}" style="width: 100%; height: 700px; object-fit: cover;"
                    class="d-block object-fit-cover" alt="gambar1" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/image/coro2.png') }}" style="width: 100%; height: 700px; object-fit: cover;"
                    class="d-block object-fit-cover" alt="gambar2" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/image/coro3.png') }}" style="width: 100%; height: 700px; object-fit: cover;"
                    class="d-block object-fit-cover" alt="gambar3" />
            </div>
        </div>
        <img class="wave position-absolute" src="{{ asset('storage/image/wave.png') }}" style="width: 100%; object-fit: fill; bottom: -10px; height: 200px;" alt="" srcset="">
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
