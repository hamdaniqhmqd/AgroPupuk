<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard Admin</title>
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link Google Fonts untuk font Popins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">

    <style>
        * {
            margin: 0;
            height: 0;
            box-sizing: 0;
            font-family: 'Poppins', sans-serif;
        }
        body {
            width: 100%;
            height: 100dvh;
            overflow: hidden;
        }
    </style>
</head>
<body>

    @include('component.sidebar')
        <div class="container">
            <h1>Contoh Halaman Web dengan Bootstrap</h1>
            <p>Ini adalah contoh penggunaan Bootstrap dalam halaman web.</p>
        </div>

<!-- Bootstrap JS via CDN (Optional, jika diperlukan) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>