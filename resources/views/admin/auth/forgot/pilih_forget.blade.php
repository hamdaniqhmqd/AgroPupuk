<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pilih opsi</title>
    {{-- link bs --}}
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/pilih_forget.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="d-flex align-items-center justify-content-center vh-100 w-100">
    <img src="{{ asset('storage/image/logoweb.png') }}" alt="logo" class="logo position-absolute top-0 start-0 mt-4 ms-4">
    <section class="kotak card rounded-4 d-flex justify-content-center gap-3">
        <h2 class="title pt-2 text-center">Ganti Password</h2>
        <p class="desc text-center text-capitalize">pilihlah metode yang sesuai dalam mengganti password</p>
        <div class="tombol d-flex align-items-stretch flex-column gap-4">
            <a href="#" class="btn d-flex gap-3 align-items-center px-3">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                Email
            </a>
            <a href="../pass valid/valid.html" class="btn d-flex gap-3 align-items-center px-3">
                <i class="fa fa-user-shield" aria-hidden="true"></i>
                Validasi Data
            </a>
        </div>
        <div class="tombol-kembali mt-3 d-flex align-items-center justify-content-start">
            <a href="{{ url('/login') }}" class="btn d-flex gap-3 align-items-center">
                Kembali
            </a>
        </div>
    </section>
</body>

</html>
