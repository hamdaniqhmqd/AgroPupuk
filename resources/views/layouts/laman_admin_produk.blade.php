<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . '' : '' }}</title>
    {{-- link alert dari sweetalert2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    {{-- link icon dari boxincons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/sidebar_new.css') }}">
    {{-- link bs --}}
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>

    <script src="https://kit.fontawesome.com/a8b5e7e027.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        main header {
            padding: 2px 2px 10px 2px;
            border-bottom: #224038 2px solid;
        }

        header .list_page {
            font-size: 14px;
            font-weight: 500;
            color: var(--primary);
        }

        header .profile {
            gap: 10px;
        }

        header .nama_admin {
            color: var(--primary);
            font-size: 14px;
            font-weight: 500;
        }

        header img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body style="color: #E3E3E3">
    @include('component.sidebar_new')
    <main class="position-relative">

        @yield('admin_produk')
        @yield('admin_produk_create')
        @yield('admin_produk_edit')
        @yield('admin_produk_show')

    </main>

    {{-- link alert js dari sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- link js --}}
    <script src="{{ asset('js/sidebar_news.js') }}"></script>

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
