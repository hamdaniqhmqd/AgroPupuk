<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/listpro.css') }}">
    <title>Produk | AGROPUPUK</title>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a8b5e7e027.js" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        body {
            background-color: #e3e3e3 !important;
        }
    </style>

    @include('component/navbaru')
    <br><br><br>
    <h1 style="display: flex">PRODUK</h1>
    <div class="bton">
        <button type="button" class="btn btn-success filter-btn" data-box-id="npk">NPK</button>
        <button type="button" class="btn btn-success filter-btn" data-box-id="phonska">Phonska</button>
        <button type="button" class="btn btn-success filter-btn" data-box-id="urea">Urea</button>
        <button type="button" class="btn btn-success filter-btn" data-box-id="za">ZA+</button>
        <div class="refresh-container">
            <div>
                <h6>refresh</h6>
            </div>
            <div class="circle" id="refresh">
                <a href="http://127.0.0.1:8000/listproduk">
                    <i class="fa-solid fa-arrow-rotate-right"></i>
                </a>
            </div>
        </div>                
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Ketik produk yang di cari">
            <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
        </div>
    </div>
    <br><br><br>
    <!-- Kotak-kotak start Area -->
    <div class="kotak-kotak">
        @foreach ($data as $item)
        @csrf
        <div class="kotak-luar" id="{{ $item->jenis }}" data-url="{{ route('adminproduk.show', $item->id) }}">
            <div class="kotak-dalam">
                <img src="{{ asset('storage/gambarproduk/'.$item->image) }}" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk</button>
            </div>
            <h4>{{ $item->title }}</h4>
        </div>
        @endforeach

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const kotakLuarDivs = document.querySelectorAll('.kotak-luar');

                kotakLuarDivs.forEach(function(div) {
                    div.addEventListener('click', function() {
                        const url = div.dataset.url;
                        window.location.href = url;
                    });
                });
            });
        </script>
    </div>
    <!-- Kotak-kotak end -->
    <script src="{{ asset('js/sort.js') }}"></script>
    <script src="{{ asset('js/infopupuk.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
</body>
</html>
