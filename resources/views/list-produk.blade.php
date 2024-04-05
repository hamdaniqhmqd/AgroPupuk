<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/listpro.css') }}" />
    <title>Produk List </title>    
    <!--CDN BOOTSTRAPE-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!--font popins-->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
</head>
<body >
        @include('beranda.nav')

        <div class="container">
        
            
            <h1 class="judul">PRODUK</h1>

            <div class="filter-search d-flex justify-content-between ">
                <div class="bton">
                    <button type="button" class=" btn-filter border-0" data-box-id="npk">NPK</button>
                    <button type="button" class=" btn-filter border-0" data-box-id="phonska">Phonska</button>
                    <button type="button" class=" btn-filter border-0" data-box-id="urea">Urea</button>
                    <button type="button" class=" btn-filter border-0" data-box-id="za">ZA+</button>
                </div>
                <form>
                        <div class="search">
                            <input class="form-control p-2" type="search" placeholder="Search" aria-label="Search">
                        </div>
                </form>
            </div>
    <!-- Kotak-kotak start Area -->
        <div class="kotak-kotak">
        <!--kotak luar startttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
        <div class="kotak-luar" id="npk" data-url="{{ route('redirect.to.page', ['page' => 'petronitrat']) }}">
            <div class="kotak-dalam">
                <img src="gambar\1petro-nitratfix.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk</button>
            </div>
            <p class="f-produk">Petrokimia NPK</p>
        </div>
        
    
        <div class="kotak-luar" id="phonska" data-url="{{ route('redirect.to.page', ['page' => 'phonska']) }}">
            <div class="kotak-dalam">
                <img src="gambar\2phonskafix.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p class="f-produk">Phonska</p>
        </div> <!-- Kotak luar end -->
    
        <div class="kotak-luar" id="urea" data-url="{{ route('redirect.to.page', ['page' => 'urea']) }}">
            <div class="kotak-dalam">
                <img src="gambar\3ppkurea.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p class="f-produk">Pusri Urea</p> <!-- Tulisan di bawah kotak dalam -->
        </div> <!-- Kotak luar end -->
    
        <div class="kotak-luar" id="za" data-url="{{ route('redirect.to.page', ['page' => 'za']) }}">
            <div class="kotak-dalam">
                <img src="gambar\4zafix.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p  class="f-produk">Petrokimia ZA+</p> <!-- Tulisan di bawah kotak dalam -->
        </div>
        <!-- Kotak luar end break line rowwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww -->
        <!--kotak luar startttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
        <div class="kotak-luar" id="npk" data-url="{{ route('redirect.to.page', ['page' => 'petronitrat']) }}">
            <div class="kotak-dalam">
                <img src="gambar\1petro-nitratfix.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p  class="f-produk">Petrokimia NPK</p> <!-- Tulisan di bawah kotak dalam -->
        </div> <!-- Kotak luar end -->
    
        <div class="kotak-luar" id="phonska" data-url="{{ route('redirect.to.page', ['page' => 'phonska']) }}">
            <div class="kotak-dalam">
                <img src="gambar\2phonskafix.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p  class="f-produk">Phonska</p> <!-- Tulisan di bawah kotak dalam -->
        </div> <!-- Kotak luar end -->
    
        <div class="kotak-luar" id="urea" data-url="{{ route('redirect.to.page', ['page' => 'urea']) }}">
            <div class="kotak-dalam">
                <img src="gambar\3ppkurea.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p  class="f-produk">Pusri Urea</p> <!-- Tulisan di bawah kotak dalam -->
        </div> <!-- Kotak luar end -->
    
        <div class="kotak-luar" id="za" data-url="{{ route('redirect.to.page', ['page' => 'za']) }}">
            <div class="kotak-dalam">
                <img src="gambar\4zafix.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p  class="f-produk">Petrokimia ZA+</p> <!-- Tulisan di bawah kotak dalam -->
        </div> 
        <!-- Kotak luar end break line rowwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww -->
            <!--kotak luar startttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
            <div class="kotak-luar" id="npk" data-url="{{ route('redirect.to.page', ['page' => 'petronitrat']) }}">
                <div class="kotak-dalam">
                    <img src="gambar\1petro-nitratfix.png" alt="Gambar">
                </div>
                <div class="kotak-hijau">
                    <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
                </div> <!-- Kotak berwarna hijau -->
                <p  class="f-produk">Petrokimia NPK</p> <!-- Tulisan di bawah kotak dalam -->
            </div> <!-- Kotak luar end -->
        
            <div class="kotak-luar" id="phonska" data-url="{{ route('redirect.to.page', ['page' => 'phonska']) }}">
                <div class="kotak-dalam">
                    <img src="gambar\2phonskafix.png" alt="Gambar">
                </div>
                <div class="kotak-hijau">
                    <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
                </div> <!-- Kotak berwarna hijau -->
                <p  class="f-produk">Phonska</p> <!-- Tulisan di bawah kotak dalam -->
            </div> <!-- Kotak luar end -->
        
            <div class="kotak-luar" id="urea" data-url="{{ route('redirect.to.page', ['page' => 'urea']) }}">
                <div class="kotak-dalam">
                    <img src="gambar\3ppkurea.png" alt="Gambar">
                </div>
                <div class="kotak-hijau">
                    <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
                </div> <!-- Kotak berwarna hijau -->
                <p  class="f-produk">Pusri Urea</p> <!-- Tulisan di bawah kotak dalam -->
            </div> <!-- Kotak luar end -->
        
            <div class="kotak-luar" id="za" data-url="{{ route('redirect.to.page', ['page' => 'za']) }}">
                <div class="kotak-dalam">
                    <img src="gambar\4zafix.png" alt="Gambar">
                </div>
                <div class="kotak-hijau">
                    <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
                </div> <!-- Kotak berwarna hijau -->
                <p  class="f-produk">Petrokimia ZA+</p> <!-- Tulisan di bawah kotak dalam -->
            </div> 
            <!-- Kotak luar end break line rowwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww -->
                <!--kotak luar startttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
        <div class="kotak-luar" id="npk" data-url="{{ route('redirect.to.page', ['page' => 'petronitrat']) }}">
            <div class="kotak-dalam">
                <img src="gambar\1petro-nitratfix.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p  class="f-produk">Petrokimia NPK</p> <!-- Tulisan di bawah kotak dalam -->
        </div> <!-- Kotak luar end -->
    
        <div class="kotak-luar" id="phonska" data-url="{{ route('redirect.to.page', ['page' => 'phonska']) }}">
            <div class="kotak-dalam">
                <img src="gambar\2phonskafix.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p  class="f-produk">Phonska</p> <!-- Tulisan di bawah kotak dalam -->
        </div> <!-- Kotak luar end -->
    
        <div class="kotak-luar" id="urea" data-url="{{ route('redirect.to.page', ['page' => 'urea']) }}">
            <div class="kotak-dalam">
                <img src="gambar\3ppkurea.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p  class="f-produk">Pusri Urea</p> <!-- Tulisan di bawah kotak dalam -->
        </div> <!-- Kotak luar end -->
    
        <div class="kotak-luar" id="za" data-url="{{ route('redirect.to.page', ['page' => 'za']) }}">
            <div class="kotak-dalam">
                <img src="gambar\4zafix.png" alt="Gambar">
            </div>
            <div class="kotak-hijau">
                <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
            </div> <!-- Kotak berwarna hijau -->
            <p  class="f-produk">Petrokimia ZA+</p> <!-- Tulisan di bawah kotak dalam -->
        </div>
        </div>
        
    <!-- Kotak luar end break line rowwww -->
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
    </body>
