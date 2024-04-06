<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . '' : '' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>

        th,
        td {
            padding: 5px;
            word-wrap: break-word;
            text-align: center;
        }

        tbody tr {
            border-bottom: 1px solid #224038;
            /* untuk menambahkan garis di bawah setiap data */
        }
    </style>
</head>

<body style="color: #E3E3E3">
    @yield('admin.berita')
    @yield('tambah_berita')
    @yield('edit_berita')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
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
        @elseif (session('error')) // jika terjadi error atau nilai succes bernilai false
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

        function hapusData() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengonfirmasi dengan click ya, 
                    // form akan disubmit
                    document.getElementById('formHapusData').submit();
                } else {
                    // Jika pengguna memilih "Tidak", 
                    // form tidak akan disubmit
                    return false;
                }
            });

            // Jangan disubmit secara otomatis sebelum mendapatkan konfirmasi
            return false;
        }
    </script>


</body>
</html>
