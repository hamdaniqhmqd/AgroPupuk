<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Captcha Generator | CodingAyush</title>
    <link rel="stylesheet" href="{{ asset('css/auth/captcha.css') }}" />
    {{-- link bs --}}
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body class="badan d-flex justify-content-center align-items-center vh-100 w-100">
    <img src="{{ asset('storage/image/logoweb.png') }}" alt="logo"
        class="logo position-absolute top-0 start-0 mt-4 ms-4">
    <div class="card card-forget rounded-4">
        <header class="py-2 text-center mb-2">Validasi Kode</header>
        <p class="desc text-center text-capitalize text-center">masukan kode di bawah dengan benar</p>
        <div class="input-box captch_box">
            <input type="text" value="" disabled />
            <button class="refresh_button dflex align-items-center justify-content-center">
                <i class="fa-solid fa-rotate-right"></i>
            </button>
        </div>
        <form action="" method="POST">
            <div class="input-box captch_input mb-4">
                <input type="text" id="captcha" class="rounded-3" required />
                <label for="captcha" id="labelcaptcha">Masukkan Kode</label>
            </div>
            <div class="input-box button d-flex align-items-center justify-content-between">
                <a href="../opsi/opsi.html" class="btn d-flex gap-3 align-items-center">
                    Kembali
                </a>
                <div class="button disabled">
                    <button type="submit" class="btn">Selanjutnya</button>
                </div>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/auth/captcha.js') }}"></script>
</body>

</html>
