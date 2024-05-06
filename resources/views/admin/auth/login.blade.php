<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

{{-- <body>
    <div class="wrapper">
        <div class="title">Login</div>
        <div class="desc">Enter the correct username and password</div>
        <form action="{{ url('process_login') }}" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="name" id="name" required value="{{ old('name') }}" />
                <label for="name" id="labeluser">Username</label>
                <i class="fa fa-user" id="user_icon"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="pass" required />
                <label for="pass" id="labelpass">Password</label>
                <i class="fa fa-eye-slash" id="pass_icon"></i>
            </div>
            <div class="forget">
                <label>
                    <input type="checkbox" id="checkbox" /> Remember me
                </label>
                <a href="{{ url('/forget') }}">Forget Password</a>
            </div>
            <div class="input-box button">
                <input id="button" type="submit" value="Submit" class="" required />
            </div>
            <div class="register">
                <span class="text">Don't have an account? </span><a href="{{ url('/register') }}"
                    class="link">Register</a>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
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
</body> --}}

<body class="badan d-flex align-items-center justify-content-center vh-100 w-100">
    <img src="{{ asset('storage/image/logoweb.png') }}" alt="logo" class="logo position-absolute top-0 start-0 mt-4 ms-4">
    <div class="view d-flex align-items-center justify-content-center gap-3 bg-dark bg-opacity-50 vh-100 w-100">
        <div class="card-login card rounded-4-">
            <div class="title text-center py-2">Login</div>
            <div class="desc text-center py-2">Masukkan username dan password yang sesuai</div>
            <form action="{{ url('process_login') }}" method="POST">
                @csrf
                <div class="input-box">
                    <input type="text" name="username" id="name" name="name" required value="" />
                    <label for="name" id="labeluser">Username</label>
                    <i class="fa fa-user" id="user_icon"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" name="password" id="pass" required />
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
            </form>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
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

</html>
