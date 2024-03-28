<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style-listpro.css">
    <title>Produk List </title>    
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body >
    <style>
        body{
            background-color: #e3e3e3;
        }
        </style>
        <div class="navbar-container">
            <nav class="navbar">
                <ul>
                    <li><img src="Screenshot (12435).png" width="50px" height="50px" alt="logola"></li>
                    <li><a href="#">BERANDA</a></li>
                    <li><a href="#">PRODUK</a></li>
                    <li><a href="#">BERITA</a></li>
                    <li><a href="#">SIPUPUK</a></li>
                    <li><a href="#">TENTANG KAMI</a></li>
                    </ul>
            </nav>
        </div>
        <br><br><br><br>
        <h1>PRODUK</h1>
        <div class="bton">
            <button type="button" class="btn btn-success" data-box-id="npk">NPK</button>
            <button type="button" class="btn btn-success" data-box-id="phonska">Phonska</button>
            <button type="button" class="btn btn-success" data-box-id="urea">Urea</button>
            <button type="button" class="btn btn-success" data-box-id="za">ZA+</button>

        </div>
       <br><br><br>
       
   <!-- Kotak-kotak start Area -->
   <div class="kotak-kotak">
    <!--kotak luar startttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
    <div class="kotak-luar" id="npk" data-url="/petronitrat.blade.php">
        <div class="kotak-dalam">
            <img src="gambar\1petro-nitratfix.png" alt="Gambar">
        </div>
        <div class="kotak-hijau">
            <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
        </div> <!-- Kotak berwarna hijau -->
        <h4>Petrokimia NPK</h4> <!-- Tulisan di bawah kotak dalam -->
    </div> <!-- Kotak luar end -->

    <div class="kotak-luar" id="phonska" data-url="/phonska.blade.php">
        <div class="kotak-dalam">
            <img src="gambar\2phonskafix.png" alt="Gambar">
        </div>
        <div class="kotak-hijau">
            <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
        </div> <!-- Kotak berwarna hijau -->
        <h4>Phonska</h4> <!-- Tulisan di bawah kotak dalam -->
    </div> <!-- Kotak luar end -->

    <div class="kotak-luar" id="urea" data-url="/urea.blade.php">
        <div class="kotak-dalam">
            <img src="gambar\3ppkurea.png" alt="Gambar">
        </div>
        <div class="kotak-hijau">
            <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
        </div> <!-- Kotak berwarna hijau -->
        <h4>Pusri Urea</h4> <!-- Tulisan di bawah kotak dalam -->
    </div> <!-- Kotak luar end -->

    <div class="kotak-luar" id="za" data-url="/za.blade.php">
        <div class="kotak-dalam">
            <img src="gambar\4zafix.png" alt="Gambar">
        </div>
        <div class="kotak-hijau">
            <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
        </div> <!-- Kotak berwarna hijau -->
        <h4>Petrokimia ZA+</h4> <!-- Tulisan di bawah kotak dalam -->
    </div> <br><br><br> 
    <!-- Kotak luar end break line rowwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww -->
   <!--kotak luar startttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
   <div class="kotak-luar" id="npk" data-url="/petronitrat.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\1petro-nitratfix.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Petrokimia NPK</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <!-- Kotak luar end -->

<div class="kotak-luar" id="phonska" data-url="/phonska.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\2phonskafix.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Phonska</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <!-- Kotak luar end -->

<div class="kotak-luar" id="urea" data-url="/urea.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\3ppkurea.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Pusri Urea</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <!-- Kotak luar end -->

<div class="kotak-luar" id="za" data-url="/za.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\4zafix.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Petrokimia ZA+</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <br><br><br> 
<!-- Kotak luar end break line rowwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww -->
<!--kotak luar startttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
<div class="kotak-luar" id="npk" data-url="/petronitrat.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\1petro-nitratfix.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Petrokimia NPK</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <!-- Kotak luar end -->

<div class="kotak-luar" id="phonska" data-url="/phonska.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\2phonskafix.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Phonska</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <!-- Kotak luar end -->

<div class="kotak-luar" id="urea" data-url="/urea.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\3ppkurea.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Pusri Urea</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <!-- Kotak luar end -->

<div class="kotak-luar" id="za" data-url="/za.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\4zafix.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Petrokimia ZA+</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <br><br><br> 
<!-- Kotak luar end break line rowwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww -->
<!--kotak luar startttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt-->
<div class="kotak-luar" id="npk" data-url="/petronitrat.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\1petro-nitratfix.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Petrokimia NPK</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <!-- Kotak luar end -->

<div class="kotak-luar" id="phonska" data-url="/phonska.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\2phonskafix.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Phonska</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <!-- Kotak luar end -->

<div class="kotak-luar" id="urea" data-url="/urea.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\3ppkurea.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Pusri Urea</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <!-- Kotak luar end -->

<div class="kotak-luar" id="za" data-url="/za.blade.php">
    <div class="kotak-dalam">
        <img src="gambar\4zafix.png" alt="Gambar">
    </div>
    <div class="kotak-hijau">
        <button type="button" class="btn btn-success custom-disabled">Beli Produk </button>
    </div> <!-- Kotak berwarna hijau -->
    <h4>Petrokimia ZA+</h4> <!-- Tulisan di bawah kotak dalam -->
</div> <br><br><br> 
<!-- Kotak luar end break line rowwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww -->
</div>
<!--Kotak-kotak end-->
<script src="{{ asset("js\sort.js") }}"></script>
<script src="{{ asset("js\infopupuk.js") }}"></script>
    </body>
