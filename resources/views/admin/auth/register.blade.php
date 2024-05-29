<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
    {{-- link bs --}}
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
</head>

<body class="badan">
    <img src="{{ asset('storage/image/logoweb.png') }}" alt="logo"
        class="logo position-absolute top-0 start-0 mt-4 ms-4">
    <div class="wrapper">
        <div class="title">Register</div>
        <div class="desc">Enter the correct username and password</div>
        <form action="{{ url('process_register') }}" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="username" id="user" class="@error('username') is-invalid @enderror"
                    required />
                <label for="user" id="labeluser">Username</label>
                <i class="fa fa-user" id="user_icon"></i>
            </div>
            <div class="input-box">
                <input type="text" name="email" id="email" required />
                <label for="email" id="labelemail">Email</label>
                <i class="fa fa-user" id="user_icon"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="pass" required />
                <label for="pass" id="labelpass">Password</label>
                <i class="fa fa-eye-slash" id="pass_icon"></i>
            </div>
            <div class="input-box">
                <input type="password" name="konfirmasi_password"
                    class="@error('konfirmasi_password') is-invalid @enderror" id="conf_pass" required disabled />
                <label for="conf_pass" id="labelconfpass" class="active">Konfirmasi Password</label>
                <i class="fa fa-eye-slash" id="confpass_icon"></i>
            </div>
            <div class="input-box button">
                <input id="button" type="submit" value="Submit" class="" required />
            </div>
            <div class="register">
                <span class="text">Kamu sudah punya akun? </span><a href="{{ url('/login') }}"
                    class="link">Login</a>
            </div>
        </form>
        <!-- error message untuk username -->
        <div class="position-absolute end-0 bottom-0 me-3 mb-3">
            @error('username')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ $message }}
                </div>
            @enderror
            @error('konfirmasi_password')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <script src="{{ asset('js/auth/register.js') }}"></script>
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
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
        @endif
    </script>
</body>

</body>

</html>
