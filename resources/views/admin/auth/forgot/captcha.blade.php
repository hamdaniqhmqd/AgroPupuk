<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validasi Kode</title>
    <link rel="stylesheet" href="{{ asset('css/auth/captcha.css') }}" />
    {{-- link alert dari sweetalert2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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
        <form action="{{ route('forget.proses_validasi') }}" method="POST">
            @csrf
            <div class="input-box captch_box">
                <input type="text" name="kode" value="{{ $request->get('kode') }}" />
                <button class="refresh_button dflex align-items-center justify-content-center">
                    <i class="fa-solid fa-rotate-right"></i>
                </button>
            </div>
            <div class="input-box captch_input mb-4">
                <input type="text" id="captcha" name="konfirmasi_kode"
                    class="rounded-3 @error('konfirmasi_kode') is-invalid @enderror" required />
                <label for="captcha" id="konfirmasi_kode">Masukkan Kode</label>
            </div>
            <div class="input-box button d-flex align-items-center justify-content-between">
                <a href="{{ url('/forget') }}" class="btn d-flex gap-3 align-items-center">
                    Kembali
                </a>
                <div class="button disabled">
                    <button type="submit" class="btn">Selanjutnya</button>
                </div>
            </div>
        </form>
    </div>
    <!-- error message untuk konfirmasi_kode -->
    @error('konfirmasi_kode')
        <div class="alert alert-danger alert-dismissible fade show  position-absolute end-0 bottom-0 me-3 mb-3"
            role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror

    <script src="{{ asset('js/auth/captcha.js') }}"></script>
    {{-- link alert js dari sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // untuk tampilan alert atau pemberitahuan
        @if (session('success')) // jika suscces menambahkan atau mengubah data
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('warning')) // jika terjadi error atau nilai succes bernilai false
            Swal.fire({
                icon: "warning",
                title: "Maaf!",
                text: "{{ session('warning') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error')) // jika terjadi error atau nilai succes bernilai false
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>

</html>
