<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- link bs --}}
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/auth/validasi.css') }}">
    {{-- link font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Document</title>
</head>

<body class="d-flex align-items-center justify-content-center vh-100 w-100">
    <img src="{{ asset('storage/image/logoweb.png') }}" alt="logo" class="logo position-absolute top-0 start-0 mt-4 ms-4">
    <div class="card-login card rounded-4">
        <div class="title py-2 text-center mb-2">Validasi</div>
        <div class="desc text-center text-capitalize text-center">masukan nama dan tanggal lahir pengguna <br> yang
            sesuai</div>
        <form action="" method="POST">
            <div class="input-box">
                <input type="text" name="name" id="name" class="rounded-3" required value="" />
                <label for="name" id="labeluser">Username</label>
                <i class="fa fa-user" id="user_icon"></i>
            </div>
            <div class="input-box button d-flex align-items-center justify-content-between">
                <a href="{{ route('forget') }}" class="btn d-flex gap-3 align-items-center">
                    Kembali
                </a>
                <button type="submit" class="btn ">Selanjutnya</button>
            </div>
        </form>
    </div>
    <script src="valid.js"></script>
</body>

</html>
