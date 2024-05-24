<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk Pupuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a8b5e7e027.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>

.main-head .logo img {
    width: 180px !important;
    height: 25px !important;
 }
        /* Kotak atas css start*/
.kotak-spek {
    height: 40vw;
    width: 94vw;
    background-color: #ffffff;
    margin-left: 2%;
    display: flex;
    align-items: flex-start; /* Susun elemen-elemen di bagian atas */
    border-radius: 10px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5); /* Menambahkan efek shadow hanya di bagian bawah dan kanan */
}

.kotak-spek .kotak-gambar{
    margin-top:25px;
    margin-left: 80px;
    height: 89%;
    width: 140%;
    background-color: #e3e3e3;
}

img{
    width: 100%;
    height: 100%;
}

.kotak-tulisan {
    width: 190%;
    padding-left: 10%;
    margin-top: 20px; /* Tambahkan margin atas */
}

.kotak-tulisan h1{
    color: rgba(34, 64, 56, 1);
    font-size: 48px;
    justify-content: center;
    font-family: "Poppins";
    font-weight: bold;
    margin-top: 0; /* Hilangkan margin atas untuk h1 */
    margin-bottom: 10px !important; /* Tambahkan margin bawah untuk h1 */

}

.kotak-tulisan h4,pre{
    font-size: 30px;
    font-family: "Poppins" ;
    padding-left: 30px;
    margin-top: 0; /* Hilangkan margin atas untuk h4 dan pre */
    margin-bottom: 10px; /* Tambahkan margin bawah untuk h4 dan pre */
}

.kotak-tulisan pre{
    font-family: "Poppins" ;
    font-size: 20px;
}

/* Kotak atas css end*/

.kontak-off {
    height: auto;
    justify-content: space-between;
    align-items: center; /* Vertically aligns the elements in the center */
    width:87vw;
    background-color: #ffffff;
    margin-left: 6%;
    margin-bottom: 1%;
    border-radius: 10px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5); /* Menambahkan efek shadow hanya di bagian bawah dan kanan */
}


.kontak-off h4 {
    font-size: 50px;
    font-family: "Poppins";
    margin-left: 78px;
    padding-top: 40px;
}

.kontak-off hr {
    border:solid 1px black;
    width: 96%;
    height: 1px;
    margin-left: 20px;
    margin-top: 5px
}
/*
.kontak-off .nama-toko {
    font-size: 25px;
    font-family: "Poppins";
    margin-left: 100px;
    float: left;
}

.kontak-off .harga {
    margin-left: auto;
    font-size: 42px;
    font-family: "Poppins";
    width: 50%;
    clear: both;
    justify-content: space-between;
    margin-right: 50px;
    text-align: right;
    margin-bottom:40px;
}

.kontak-off .buton {
    float: right;
    margin-right: 30px; 
}

kontak-off .buton .btn {
    width: 20vw;
    height: 20%;
    background-color: #224038 !important;
}
*/


.kontak-off-map{
    height: auto;
    width: 87vw;
    background-color: #ffffff;
    margin-left: 6%;
    margin-bottom: 1%;
    align-items: flex; /* Susun elemen-elemen di bagian atas */
    border-radius: 10px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5); /* Menambahkan efek shadow hanya di bagian bawah dan kanan */
    display: inline-block;

}

.kontak-off-map .harga{
    display: inline-block;
    font-size: 50px;
    font-family: "Poppins";
    margin-right: 60px;
    padding-top: 40px;

}
.kontak-off-map h4{
    font-size: 50px;
    font-family: "Poppins";
    margin-left: 78px;
    padding-top: 40px;
}

.kontak-off-map .nama-toko{
    font-size: 25px;
    font-family: "Poppins";
    margin-left: 100px;
    float: left;
}

.kontak-off-map .buton{
    float: right;
    font-size: 50px;
    font-family: "Poppins";
    margin-right: 239px;
    padding-top: 40px;
}

.kontak-off-map .buton .btn{
    width: 300%;
    height: 300%;
    background-color: #224038 !important;
}

.kontak-off-map .lokasi-off{
    font-size: 25px;
    font-family: "Poppins";
    margin-left: -140px;
    float: left;
}

.kontak-off-map .lokasi-off p{
    font-size: 20px;
    padding-top: 20px;
}

.kontak-off-map  hr {
    border:solid 1px black;
    width: 96%;
    height: 1px;
    margin-left: 20px;
}

.direct-link {
    height: auto;
    width: 94vw;
    background-color: #ffffff;
    margin-left: 2%;
    margin-bottom: 1%;
    align-items: flex; /* Susun elemen-elemen di bagian atas */
    border-radius: 10px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5); /* Menambahkan efek shadow hanya di bagian bawah dan kanan */
}

.no-data{
    display: flex;
            justify-content: center;
            align-items: center;
            height: 100px; /* Anda bisa menyesuaikan tinggi ini sesuai kebutuhan */
            font-size: 18px; /* Anda bisa menyesuaikan ukuran font ini sesuai kebutuhan */
            color: grey; /* Anda bisa menyesuaikan warna teks ini sesuai kebutuhan */
            font-family: "Inter", sans-serif;
}
    </style>
</head>


<body style="background: #e3e3e3">
    @include('component/navbaru')

    <div class="container bg-white d-flex rounded-2" style="width: 90%; margin:auto; margin-top: 7%; margin-bottom: 5%; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
        <div class="gambar" style="width: 40%">
            <div class="card border-0 rounded" style="width: 90%; margin:auto;">
                <div class="card-body">
                    <img style="background-color: #E3E3E3" src="{{ asset('storage/gambarproduk/'.$product->image) }}" class="rounded" style="width: 100%">
                </div>
            </div>
        </div>
        <div class="desk-produk" style="width: 60%">
            <div class="card border-0 rounded" style="width: 70%; margin:auto;">
                <div class="card-body">
                    <h1 style="color:#224038;">{{ $product->title }}</h1>
                        <p>{!! $product->description !!}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="kontak-off"> <!--tokopedia-->
        <img src="{{ asset('storage/image/tokpedlogo.jpeg') }}" style="width: 20%;margin-top:10px; margin-left:28px;"></img> <!--ganti img tokped-->
        <hr> <!-- batas toko-->
        <div class="container">
            <div class="d-flex row">
                @forelse($product->productStores->where('marketplace', 'Tokopedia') as $store)
            <div class="col-md-12">
        <div class="nama-toko fw-normal fs-4">{{ $store->store_name }}</div>
    </div>
        <div class="d-flex py-2 justify-content-between">
            <h1 class="harga fw-semibold fs-2">{{ "Rp " . number_format($store->price,2,',','.') }}</h1>
            <button type="button" style="width: 20vw; background-color: #224038 !important;" class="btn btn-success  onclick="window.location.href='{{ $store->store_link }}'">Kontak</button>
        </div>
    </div>
    </div>
        <hr> <!-- batas toko-->
        @empty
        <div class="no-data">Tidak ada data di sini</div>
        @endforelse

    </div>
    <br>
    <div class="kontak-off"> <!--shopi-->
        <img src="{{ asset('storage/image/sopi.png') }}" style="width: 13%;margin-top:10px; margin-left:28px;"></img> <!--ganti img tokped-->
        <hr> <!-- batas toko-->
        <div class="container">
            <div class="d-flex row">
                @forelse($product->productStores->where('marketplace', 'Shopee') as $store)
            <div class="col-md-12">
        <div class="nama-toko fw-normal fs-4">{{ $store->store_name }}</div>
    </div>
        <div class="d-flex py-2 justify-content-between">
            <h1 class="harga fw-semibold fs-2">{{ "Rp " . number_format($store->price,2,',','.') }}</h1>
            <button type="button" style="width: 20vw; background-color: #224038 !important;" class="btn btn-success  onclick="window.location.href='{{ $store->store_link }}'">Kontak</button>
        </div>
    </div>
    </div>
        <hr> <!-- batas toko-->
        @empty
        <div class="no-data">Tidak ada data di sini</div>
        @endforelse
    </div>
    <br>
    <div class="kontak-off"> <!--lazada-->
        <img src="{{ asset('storage/image/lajada.png') }}" style="width: 13%;margin-top:10px; margin-left:28px;"></img> <!--ganti img tokped-->
        <hr> <!-- batas toko-->
        <div class="container">
            <div class="d-flex row">
                @forelse($product->productStores->where('marketplace', 'Lazada') as $store)
            <div class="col-md-12">
        <div class="nama-toko fw-normal fs-4">{{ $store->store_name }}</div>
    </div>
        <div class="d-flex py-2 justify-content-between">
            <h1 class="harga fw-semibold fs-2">{{ "Rp " . number_format($store->price,2,',','.') }}</h1>
            <button type="button" style="width: 20vw; background-color: #224038 !important;" class="btn btn-success  onclick="window.location.href='{{ $store->store_link }}'">Kontak</button>
        </div>
    </div>
    </div>
        <hr> <!-- batas toko-->
        @empty
        <div class="no-data">Tidak ada data di sini</div>
        @endforelse
    </div>

   
    <br>

    <div class="kontak-off"> <!--blibli-->
        <img src="{{ asset('storage/image/blili.png') }}" style="width: 13%;margin-top:10px; margin-left:28px;"></img> <!--ganti img tokped-->
        <hr> <!-- batas toko-->
        <div class="container">
            <div class="d-flex row">
                @forelse($product->productStores->where('marketplace', 'BliBli') as $store)
            <div class="col-md-12">
        <div class="nama-toko fw-normal fs-4">{{ $store->store_name }}</div>
    </div>
        <div class="d-flex py-2 justify-content-between">
            <h1 class="harga fw-semibold fs-2">{{ "Rp " . number_format($store->price,2,',','.') }}</h1>
            <button type="button" style="width: 20vw; background-color: #224038 !important;" class="btn btn-success  onclick="window.location.href='{{ $store->store_link }}'">Kontak</button>
        </div>
    </div>
    </div>
        <hr> <!-- batas toko-->
        @empty
        <div class="no-data">Tidak ada data di sini</div>
        @endforelse
    </div>


{{--
    <div class="kontak-off-map">
        <h4 style="display: inline-block;">Alun-alun Kota Madiun</h4>
        <div class="harga"><strong>Rp.80.000</strong></div>
        <hr>
        <div class="container"></div>
        <div style="display: inline-block;"class="nama-toko" >Khenariah Store</div>
            <div class="buton">
                <button type="button" class="btn btn-success">Lihat Detail</button>
        </div> <br>
        <div class="lokasi-off">
            <i style="display: inline-block;" class="fa-solid fa-location-dot"></i>
            <p style="display: inline-block;">Jl. Serayu No. 84 Madiun</p>
        </div>
        <br><hr>

    </div>
     --}}
    <!--
    <h1>Helo { $namaorg } dari indo</h1> alhamdulillah berhasil variabel nama berisi nama haqi di kontroller.... kalo itu mau di ganti yang di ganti itu adalah di pendefinisian di $data, balik ke kontroller sekaang
    -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
