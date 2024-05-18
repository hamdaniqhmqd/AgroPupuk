<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password Checker</title>
    {{-- link bs --}}
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/auth/pass_baru.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body class="d-flex align-items-center justify-content-center vh-100 w-100">
    <img src="{{ asset('storage/image/logoweb.png') }}" alt="logo"
        class="logo position-absolute top-0 start-0 mt-4 ms-4">
    <form action="{{ route('forget.proses_buat') }}" method="POST" class="card-login card rounded-4">
        <div class="title pt-2 d-flex justify-content-center">Buat Password</div>
        <div class="desc text-center text-capitalize">Masukkan password dan konfirmasi password dengan benar</div>
        @csrf
        <div class="input-box">
            <input type="text" name="username" id="name" class="rounded-3" required value="" />
            <label for="name" id="labeluser">Username</label>
            <i class="fa fa-user" id="user_icon"></i>
        </div>
        <div class="input-box">
            <input type="password" name="pass" id="pass" required />
            <label for="pass" id="labelpass">Create password</label>
            <i class="fa fa-eye-slash" id="pass_icon"></i>
        </div>
        <div class="input-box">
            <input type="password" name="conf_pass" id="conf_pass" class="active"
                class=" @error('conf_pass') is-invalid @enderror" required disabled />
            <label for="conf_pass" id="labelconf" class="">Confirm password</label>
            <i class="fa fa-eye-slash" id="conf_icon"></i>
        </div>
        <div class="input-box button d-flex align-items-center justify-content-between">
            <a href="../pass valid/valid.html" class="btn">
                Kembali
            </a>
            <button type="submit" id="button" class="btn" disabled>Selesai</button>
        </div>
    </form>
    <!-- error message untuk conf_pass -->
    @error('conf_pass')
        <div class="alert alert-danger alert-dismissible fade show  position-absolute end-0 bottom-0 me-3 mb-3"
            role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror
    <script src="{{ asset('js/auth/pass_baru.js') }}"></script>
</body>

</html>
