<!-- link : http://127.0.0.1:8000/listproduk -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/listpro.css') }}">
    <title>Produk List </title>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a8b5e7e027.js" crossorigin="anonymous"></script>


</head>
<body >
    <style>
        body{
            background-color: #e3e3e3;
        }
        </style>
        <!--include component.nav-->


    <br><br><br><br>
        <h1>PRODUK</h1>
        <div class="bton">
            <button type="button" class="btn btn-success" data-box-id="npk">NPK</button>
            <button type="button" class="btn btn-success" data-box-id="phonska">Phonska</button>
            <button type="button" class="btn btn-success" data-box-id="urea">Urea</button>
            <button type="button" class="btn btn-success" data-box-id="za">ZA+</button>
            <div class="circle" id="refresh">
                <a href="http://127.0.0.1:8000/listproduk">
                    <i class="fa-solid fa-rotate fa-2x"></i>
            </a>
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
        
    
    <!--kotak luar startttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
    @csrf
    <div class="kotak-luar" id="npk" data-url="{{ route('adminproduk.show', $item->id) }}">
        <div class="kotak-dalam">
            <img src="{{ asset('storage/gambarproduk/'.$item->image) }}" alt="Gambar">
        </div>
        <div class="kotak-hijau">
            <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
        </div> <!-- Kotak berwarna hijau -->
        <h4>{{ $item->title }}</h4> <!-- Tulisan di bawah kotak dalam maks 24 -->

    </div> <!-- Kotak luar end -->
    @endforeach
 
    <!--direct halaman info pupuk start-->
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
    <!--direct halaman info pupuk start-->
    
</div>
<!--Kotak-kotak end-->
<script src="{{ asset("js\sort.js") }}"></script>
<script src="{{ asset("js\infopupuk.js") }}"></script>
<script src="{{ asset("js\search.js") }}"></script>

    </body>
