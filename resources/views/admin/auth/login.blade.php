<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="badan d-flex align-items-center justify-content-center vh-100 w-100">
    <img src="{{ asset('storage/image/logoweb.png') }}" alt="logo"
        class="logo position-absolute top-0 start-0 mt-4 ms-4">
    <div class="view d-flex align-items-center justify-content-center vh-100 w-100">
        <div class="card-login card rounded-4-">
            <div class="title text-center py-2">Login</div>
            <div class="desc text-center py-2">Masukkan username dan password yang sesuai</div>
            <form action="{{ url('process_login') }}" method="POST">
                @csrf
                <div class="input-box">
                    <input type="text" name="username" id="name" class="@error('username') is-invalid @enderror"
                        name="name" required value="" />
                    <label for="name" id="labeluser">Username</label>
                    <i class="fa fa-user" id="user_icon"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" class="@error('password') is-invalid @enderror" name="password" id="pass" required />
                    <label for="pass" id="labelpass">Password</label>
                    <i class="fa fa-eye-slash" id="pass_icon"></i>
                </div>
                <div class="forget">
                    <label>
                        <input type="checkbox" id="checkbox" /> Remember me
                    </label>
                    <a href="{{ url('/forget') }}">Ganti Password</a>
                </div>
                <div class="input-box button">
                    <input id="button" type="submit" value="Submit" class="" required />
                </div>
                <div class="register">
                    <span class="text">Tidak punya akun? </span><a href="{{ url('/register') }}" class="link">Daftar
                        Sekarang</a>
                </div>
            </form>
        </div>
        <div class="position-absolute end-0 bottom-0 me-3 mb-3">
            @error('username')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ $message }}
                </div>
            @enderror
            @error('password')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <script src="{{ asset('js/auth/login.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "PERINGATAN",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('warning'))
            Swal.fire({
                icon: "warning",
                title: "PENGUMUMAN",
                text: "{{ session('warning') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>

</html>
