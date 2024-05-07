<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Si Pupuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin-sipupuk.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">



</head>
@php
    use Illuminate\Support\Str;
@endphp

<style>
</style>
<body style="background: lightgray">
    
    @include('component.sidebar_new')

<main class="position-relative">

    <div class="container-full">


            <div class="container mt-5 ">
                <div class="row">
                    <div class="col-md-12">
                                <div class="d-flex justify-content-between  mt-4">
                                    <h3 class="w-60">DASHBOARD SIPUPUK</h3>
                                    <div class="d-flex w-40 justify-content-between">
                                        <a href="{{ route('adminsipupuk.create') }}" class=" btn-custom border-0 text-center justify-content-center align-items-center">
                                            <span class="teks"><i class="bi bi-plus-square"></i> Add Article</span>
                                        </a>
                                        <form class="input-group search-custom " action="{{ route('cari') }}" method="GET">
                                            <input class="form-control" type="search" placeholder="Masukkan kata kunci..." aria-label="Masukkan kata kunci..."
                                                aria-describedby="button-search" name="search" value="{{ old('cari') }}" type="submit" />
                                        </form>
                                    </div>
                                </div>
                            <div class="card border-0 shadow rounded p-2 mt-3 ">
                                <table class="table table-striped table-bordered-less table-hover">
                                    <thead class="text-center">
                                        <thead>
                                            <th scope="col">GAMBAR</th>
                                            <th scope="col">JUDUL</th>
                                            <th scope="col">CONTENT</th>
                                            <th scope="col">ADMIN</th>
                                            <th scope="col">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($sipupuks as $sipupuk)
                                        <tr>
                                            <td class="text-center" style="max-width: 150px; height: 100px;">
                                                <img src="{{ asset('storage/gambar_sipupuk/'.$sipupuk->image) }}" class="rounded" width="150" height="70">
                                            </td>
                                            <td style="max-width: 170px; height: 100px; overflow: hidden;   text-overflow: ellipsis">{{ $sipupuk->title }}</td>
                                            <td style="max-width: 330px; height: 100px; overflow: hidden;  text-overflow: ellipsis; font-size: 12px;" >{!! html_entity_decode(Str::limit($sipupuk->content, 100)) !!}</td>
                                            <td style="max-width: 100px; height: 100px; overflow: hidden;  text-overflow: ellipsis;">{{ $sipupuk->author }}</td>
                                            <td class="text-center" style="max-width: 50px; height: 100px;  overflow: hidden;  text-overflow: ellipsis;">
                                                <form action="{{ route('adminsipupuk.destroy', $sipupuk->id) }}" method="POST" class="d-flex row">
                                                    <a href="{{ route('adminsipupuk.show', $sipupuk->id) }}" class="show">
                                                        <i class="bi bi-eye-fill fs-5 text-decoration-none text-hijau"></i>
                                                    </a>
                                                    <a href="{{ route('adminsipupuk.edit', $sipupuk->id) }}" class="edit">
                                                        <i class="bi bi-pencil-fill fs-5 text-decoration-none   "></i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="button-delete">
                                                        <span >
                                                            <i class="bi bi-trash3-fill fs-5 text-decoration-none text-danger"></i>
                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                            @empty
                                            <div class="alert alert-danger">
                                                Data Produk belum Tersedia.
                                            </div>
                                            @endforelse
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>

            <!--Pagination-->
            <div class="container d-flex justify-content-center border-top" style="width: 100%;">
                <!--Pagination-->
                <nav aria-label="Pagination">
                    <ul class="pagination my-4">
                        @if ($sipupuks->onFirstPage())
                            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                <span class="page-link" aria-hidden="true">Previous</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $sipupuks->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Previous</a>
                            </li>
                        @endif


                        @if ($sipupuks->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $sipupuks->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                            </li>
                        @else
                            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                <span class="page-link" aria-hidden="true">Next</span>
                            </li>
                        @endif
                    </ul>
                </nav>
                <!--End Pagination-->
            </div>
            <!--End Pagi-->
        </div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //pesan dengan sweetalert
        // @if(session('success'))
        //     Swal.fire({
        //         icon: "success",
        //         title: "BERHASIL",
        //         text: "{{ session('success') }}",
        //         showConfirmButton: false,
        //         timer: 2000
        //     });
        // @elseif(session('error'))
        //     Swal.fire({
        //         icon: "error",
        //         title: "GAGAL!",
        //         text: "{{ session('error') }}",
        //         showConfirmButton: false,
        //         timer: 2000
        //     });
        // @endif

    // Menampilkan SweetAlert berdasarkan pesan sukses atau pesan kesalahan
    if (successMessage) {
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: successMessage,
            showConfirmButton: false,
            timer: 2000
        });
    }

    if (errorMessage) {
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: errorMessage,
            showConfirmButton: false,
            timer: 2000
        });
    }
});


    </script>

</body>
</html>

