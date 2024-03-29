<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Masukkan link CSS Anda di sini -->
    <link rel="stylesheet" href="{{ ('css/dashboard.css') }}">
    
</head>

<body>
    
@include('utility.sidebar')
    
    <div class="main-content-container">
        <div class="main-content">
            <h1>Dashboard Content Produk</h1>
            
            <button onclick="window.location='{{ route('formprod') }}'" class="btn">[+] Produk</button>

            <!-- Isi konten utama -->
            <p>Selamat datang di Produk Anda!</p>
            <div class="main">
                <p>
                    test
                </p>
            </div>
        </div>
    </div>


    <!-- Masukkan link JavaScript Anda di sini -->
   

</body>
</html>
