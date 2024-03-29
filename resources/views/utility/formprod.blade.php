<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Masukkan link CSS Anda di sini -->
    
    <link rel="stylesheet" href="{{ ('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>

<body>

@include('utility.sidebar')
    
<div class="main-content-container">
        <div class="main-content">
            <h1>Isi Form</h1>
            <!-- Isi konten formulir -->
            <form action="{{ route('formprod') }}" method="POST" enctype="multipart/form-data" class="form-container">
    @csrf
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" placeholder="Nama" name=nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" placeholder="Dekripsi" name="deskripsi" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="gambar">Gambar:</label>
        <input type="file" id="gambar" name="gambar" class="form-control-file" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn">Submit</button>
    </div>
</form>

        </div>
    </div>

            <!-- Isi konten utama -->
      
    <!-- Masukkan link JavaScript Anda di sini -->

</body>
</html>
