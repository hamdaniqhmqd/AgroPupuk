<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Masukkan link CSS Anda di sini -->
    <link rel="stylesheet" href="{{ ('css/app.css') }}">
    
</head>

<body>
    
@include('utility.sidebar')
    
    <div class="main-content-container">
        <div class="main-content">
            <h1>Dashboard Content Postingan</h1>
            
            <button onclick="window.location='{{ route('formprod') }}'" class="btn">[+] Postingan</button>

            <!-- Isi konten utama -->
            <p>Selamat datang di Postingan Anda!</p>
            <div class="main">
       <p>test</p>
            </div>
        </div>
    </div>


    <!-- Masukkan link JavaScript Anda di sini -->
    

</body>
</html>
