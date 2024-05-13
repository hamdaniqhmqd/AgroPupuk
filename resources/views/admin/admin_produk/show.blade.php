<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk Pupuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a8b5e7e027.js" crossorigin="anonymous"></script>
    <style>
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
    width:87vw;
    background-color: #ffffff;
    margin-left: 6%;
    margin-bottom: 1%;
    align-items: flex; /* Susun elemen-elemen di bagian atas */
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

.kontak-off .nama-toko {
    font-size: 25px;
    font-family: "Poppins";
    margin-left: 100px;
    float: left;
}

.kontak-off .harga {
    margin-left: 100px;
    font-size: 50px;
    margin-top: -20px;
    font-family: "Poppins";
    width: 50%;
    clear: both;
    margin-bottom: 2px;
}

.kontak-off .buton {
    float: right;
    margin-right: 30px; /* Adjust margin to create space between button and text */
}

.kontak-off .buton .btn {
    width: 20vw;
    height: 20%;
    background-color: #224038 !important;
}


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
    </style>
</head>


<body style="background: #e3e3e3">
<div class="pemersatu" style="background: white; margin-right:6%; margin-left:6%; margin-bottom:20px; margin-top:2px ; border-radius: 15px;">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0  rounded">
                    <div class="card-body">
                        <img src="{{ asset('/storage/gambarproduk/'.$product->image) }}" class="rounded" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 rounded">
                    <div class="card-body">
                        <h3>{{ $product->title }}</h3>
                        <code>
                            <p>{!! $product->description !!}</p>
                        </code>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            
        
    <div class="kontak-off">
        <img src="{{ asset('storage/image/tokpedlogo.jpeg') }}" style="width: 20%; margin-left:28px;"></img> <!--ganti img tokped-->
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Kaedahara Kazuha Store</div>
        <div class="buton">
            <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>{{ "Rp " . number_format($product->price,2,',','.') }}</strong></div>
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Moonton Store</div>
            <div class="buton">
                <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>Rp.3.999.000</strong></div>
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Moonton Store</div>
            <div class="buton">
                <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>Rp.3.999.000</strong></div>
    </div>
    <br>
    <div class="kontak-off">
        <img src="{{ asset('storage/image/sopi.png') }}" style="width: 20%; margin-left:28px;"></img> <!--ganti img tokped-->
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Kaedahara Kazuha Store</div>
        <div class="buton">
            <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>{{ "Rp " . number_format($product->price,2,',','.') }}</strong></div>
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Moonton Store</div>
            <div class="buton">
                <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>Rp.3.999.000</strong></div>
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Moonton Store</div>
            <div class="buton">
                <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>Rp.3.999.000</strong></div>
    </div>
    <br>
    <div class="kontak-off">
        <img src="{{ asset('storage/image/lajada.png') }}" style="width: 20%; margin-left:28px;"></img> <!--ganti img tokped-->
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Kaedahara Kazuha Store</div>
        <div class="buton">
            <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>{{ "Rp " . number_format($product->price,2,',','.') }}</strong></div>
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Moonton Store</div>
            <div class="buton">
                <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>Rp.3.999.000</strong></div>
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Moonton Store</div>
            <div class="buton">
                <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>Rp.3.999.000</strong></div>
    </div>
    <br>
    <div class="kontak-off">
        <img src="{{ asset('storage/image/blili.png') }}" style="width: 20%; margin-left:28px;"></img> <!--ganti img tokped-->
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Kaedahara Kazuha Store</div>
        <div class="buton">
            <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>{{ "Rp " . number_format($product->price,2,',','.') }}</strong></div>
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Moonton Store</div>
            <div class="buton">
                <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>Rp.3.999.000</strong></div>
        <hr> <!-- batas toko-->
        <div class="container"></div>
        <div class="nama-toko">Moonton Store</div>
            <div class="buton">
                <button type="button" class="btn btn-success">Kontak</button>
        </div>
        <div class="harga"><strong>Rp.3.999.000</strong></div>
    </div>









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
    <!--
    <h1>Helo { $namaorg } dari indo</h1> alhamdulillah berhasil variabel nama berisi nama haqi di kontroller.... kalo itu mau di ganti yang di ganti itu adalah di pendefinisian di $data, balik ke kontroller sekaang
    -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>