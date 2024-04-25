<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tentang Kami</title>
    <!--CDN BOOTSTRAPE-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!--font popins-->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/tentangkami.css') }}" />
    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body class="">

    @include('component.nav')

    <div class="container-fluid mt-5 bg-abu relative">
        <div class="cover-gambar">
            <img class="gambar-kami" src="{{ asset('storage/image/gambar-kami.jpg') }}" alt="gambar-kami">
        </div>
        <div class="konten-kami">
            <h1 class="text-center warna-hijau fw-bold" style="font-size: 50px; padding-top:50px;">Tentang Kami</h1>
            <div class="cover-logo d-flex justify-content-center ">
                <img class="logo-kami align-content-center mt-4 shadow" src="{{ asset('storage/image/logo-kami.png') }}" alt="logo-kami">
            </div>
            <div class="cover-text mt-5 pb-5 mb-5 ">
                <p class="fs-5 warna-hijau">    
                    Logo <span class="fw-bold fs-4 ">AgroPupuk</span> adalah lebih dari sekadar simbol. Ia mencerminkan identitas dan tujuan dari platform ini.
                    Dari bagian dalamnya, kita bisa melihat betapa cermatnya perancangan yang menggabungkan kata-kata 
                    "Agro" dan "Pupuk". Kata <span class="fw-bold fs-5 ">"Agro"</span> diambil dari <span class="fw-bold fs-5 ">"Pertanian"</span>, sementara <span class="fw-bold fs-5 ">"Pupuk"</span> merujuk pada sistem pembahasan
                    utama situs ini, yakni pupuk. <br></br>

                    Namun, lebih dari sekadar pengambilan kata, logo ini menghadirkan gambaran yang kuat tentang apa yang hendak 
                    disampaikan. Daun hijau yang menghiasi logo, terletak di samping kanan, memberikan kesan kesuburan pada tanaman. 
                    Ini bukanlah sembarang gambaran, melainkan representasi dari tujuan situs ini: memberikan informasi tentang cara 
                    meningkatkan kesuburan tanah dan pertumbuhan tanaman melalui penggunaan pupuk. <br></br>
                    
                    Dalam keseluruhan, logo AgroPupuk menjadi simbol yang menggambarkan misi dan identitas dari platform ini. 
                    Sebagai sebuah logo, ia berhasil menggambarkan esensi situs dengan sederhana namun kuat. Dan melalui logo ini, 
                    kita bisa memahami lebih dalam tentang fokus dan tujuan dari situs AgroPupuk. <br></br>
                    
                    <span class="fw-bold fs-4 "> AgroPupuk: Melangkah Maju dalam Dunia Pupuk </span><br></br>
                    
                    AgroPupuk bukanlah sekadar situs informasi biasa. Ia adalah rumah bagi sumber-sumber terkini tentang tren dalam
                    dunia pupuk. Dari berita terbaru mengenai inovasi pupuk hingga rekomendasi harga pasar, AgroPupuk memiliki 
                    semuanya. Dengan demikian, situs ini menjadi pilihan utama bagi siapa pun yang ingin tetap terupdate tentang 
                    perkembangan terbaru dalam industri pupuk. <br></br>
                    
                    Tidak hanya itu, AgroPupuk juga menawarkan artikel mendalam mengenai berbagai jenis pupuk. Mulai dari organik 
                    hingga anorganik, situs ini menyajikan informasi yang komprehensif tentang manfaat dan kekurangan masing-masing 
                    jenis pupuk. Dengan demikian, para petani, peneliti, dan pecinta pertanian dapat memperoleh pemahaman yang lebih 
                    baik tentang penggunaan pupuk dalam pertanian. <br></br>
                    
                    Dengan konten yang informatif dan relevan, AgroPupuk menjadi sumber daya yang berharga bagi komunitas pertanian.
                    Dalam upaya untuk mendorong inovasi dan kemajuan dalam industri pupuk, AgroPupuk terus berupaya memberikan 
                    informasi yang bermanfaat dan relevan bagi semua pihak yang terlibat dalam pertanian. Sebagai sebuah platform 
                    yang komprehensif dan terpercaya, AgroPupuk siap memimpin langkah dalam melangkah maju dalam dunia pupuk.
                </p> 
            </div>  
        </div>
    </div>
    
        @include('component.banner')
    

    <div class="container-fluid bg-abu" style="padding-top: 140px;">
        <div class="cover-visimisi pt-4">
            <div class="visi-misi">
                <div class="gambar-vm">
                    <img class="gambar" src="{{ asset('storage/image/gambar-visi-misi.jpg') }}"  alt="image visi-misi">
                </div>
                <div class="teks-vm text-center align-content-center">
                    <div style="width:80%; margin:auto;">
                        <h1 class="text-center warna-hijau fw-bold" style="font-size: 50px;">VISI</h1>
                        <p class="fs-5 warna-hijau">
                            Menjadi sumber informasi dan pengetahuan yang berguna bagi petani 
                            sampai masyarakat awam yang berguna untuk perkembangan industri pertanian
                            diindonesia.
                        </p>
                        <h1 class="text-center warna-hijau fw-bold" style="font-size: 50px; padding-top:50px;">MISI</h1>
                        <p class="fs-5 warna-hijau">
                                Menyediakan berita dan informasi mengenai pupuk.
                                Memberikan Informasi harga pupuk secara akurat.
                                Menyediakan tentang berbagai jenis pupuk serta
                                manfaat dan  dampaknya terhadap lingkungan.
                                Ikut berperan dalam memajukan industri pupuk.
                        </p>
                    </div>
                </div>
            </div>
        </div><div class="cover-card">
            <div class="list-card row gap-4">
                <div class="card col size-card mb-5">
                    <div class="card-body warna-hijau text-center">
                        <div class="circle-shape1"></div>
                        <h3 class="card-title">Ahmad Hamdani</h3>
                        <p class="card-text">
                            <strong>Nomor HP:</strong> 08123456789<br>
                            <strong>Email:</strong> ahmadhamdani@example.com<br>
                            <strong>Spesialisasi:</strong> Ahli Pupuk Organik
                        </p>
                        <h4 style="margin-top: 20px; font-weight: bold;">POLITEKNIK NEGERI MADIUN</h4>
                    </div>
                </div>
                <div class="card col size-card mt-5">
                    <div class="card-body text-center">
                        <div class="circle-shape2"></div>
                        <h3 class="card-title">Ferry Fernando</h3>
                        <p class="card-text">
                            <strong>Nomor HP:</strong> 08234567890<br>
                            <strong>Email:</strong> feryfernando@example.com<br>
                            <strong>Spesialisasi:</strong> Peneliti Pertanian
                        </p>
                        <h4 style="margin-top: 20px; font-weight: bold;">POLITEKNIK NEGERI MADIUN</h4>
                    </div>
                </div>
                <div class="card col size-card mb-5">
                    <div class="card-body text-center">
                        <div class="circle-shape3"></div>
                        <h3 class="card-title">Samodera Haqqi</h3>
                        <p class="card-text">
                            <strong>Nomor HP:</strong> 08345678901<br>
                            <strong>Email:</strong> samoderahaqqi@example.com<br>
                            <strong>Spesialisasi:</strong> Pengembang Pupuk Anorganik
                        </p>
                        <h4 style="margin-top: 20px; font-weight: bold;">POLITEKNIK NEGERI MADIUN</h4>
                    </div>
                </div>
                <div class="card col size-card mt-5">
                    <div class="card-body text-center">
                        <div class="circle-shape4"></div>
                        <h3 class="card-title">Kress Satoe Java</h3>
                        <p class="card-text">
                            <strong>Nomor HP:</strong> 08456789012<br>
                            <strong>Email:</strong> kresssatoe@example.com<br>
                            <strong>Spesialisasi:</strong> Aktivis Lingkungan
                        </p>
                        <h4 style="margin-top: 20px; font-weight: bold;">POLITEKNIK NEGERI MADIUN</h4>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </div>

    @include('component.footer')

</body>
</html>