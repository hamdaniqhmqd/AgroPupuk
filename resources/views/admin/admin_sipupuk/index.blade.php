@extends('layouts.laman_admin_artikel_sipupuk')
{{-- digunakan untuk memanggil file --}}
{{-- digunakan untuk meengidentifikasi nama dari section --}}
@section('admin_sipupuk')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <header class="position-relative d-flex align-items-center justify-content-between">
        <div class="page">
            <span class="list_page">{{ $title }}</span>
        </div>

        <div class="profile d-flex align-items-center">
            <span class="nama_admin">{{ $admin->nama }}</span>
            @if (auth()->user()->gambar)
                <img class="object-fit-fill rounded" src="{{ asset('storage/profile/' . $admin->gambar) }}" alt="profile"
                    loading="lazy" />
            @else
                <img class="object-fit-fill rounded" src="{{ asset('/gambar/user.png') }}" alt="profile"
                    loading="lazy" />
            @endif
        </div>
    </header>

    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between  mt-4">
                    <h3 class="w-60 warna-hijau">DASHBOARD SIPUPUK</h3>
                    <div class="d-flex w-40 justify-content-between">
                        <a href="{{ route('adminsipupuk.create') }}"
                            class=" btn-custom border-0 text-center justify-content-center align-items-center">
                            <span class="teks"><i class="bi bi-plus-square"></i> Add Article</span>
                        </a>
                        <form class="input-group search-custom " action="{{ route('cari') }}" method="GET">
                            <input class="form-control" type="search" placeholder="Masukkan kata kunci..."
                                aria-label="Masukkan kata kunci..." aria-describedby="button-search" name="search"
                                value="{{ old('cari') }}" type="submit" />
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
                                        <img src="{{ asset('storage/gambar_sipupuk/' . $sipupuk->image) }}" class="rounded"
                                            width="150" height="70">
                                    </td>
                                    <td
                                        style="max-width: 170px; height: 100px; overflow: hidden;   text-overflow: ellipsis">
                                        {{ $sipupuk->title }}</td>
                                    <td
                                        style="max-width: 330px; height: 100px; overflow: hidden;  text-overflow: ellipsis; font-size: 12px;">
                                        {!! html_entity_decode(Str::limit($sipupuk->content, 100)) !!}</td>
                                    <td
                                        style="max-width: 100px; height: 100px; overflow: hidden;  text-overflow: ellipsis;">
                                        {{ $sipupuk->author }}</td>
                                    <td class="text-center"
                                        style="max-width: 50px; height: 100px;  overflow: hidden;  text-overflow: ellipsis;">
                                        <form id="deleteForm{{ $sipupuk->id }}" action="{{ route('adminsipupuk.destroy', $sipupuk->id) }}" method="POST"
                                            class="d-flex row">
                                            <a href="{{ route('adminsipupuk.show', $sipupuk->id) }}" class="show">
                                                <i class="bi bi-eye-fill fs-5 text-decoration-none text-hijau"></i>
                                            </a>
                                            <a href="{{ route('adminsipupuk.edit', $sipupuk->id) }}" class="edit">
                                                <i class="bi bi-pencil-fill fs-5 text-decoration-none   "></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="deleteConfirmation({{ $sipupuk->id }})" class="button-delete">
                                                <span>
                                                    <i class="bi bi-trash3-fill fs-5 text-decoration-none text-danger"></i>
                                                </span>
                                            </button>
                                        </form>
                                    </td>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Data sipupuk belum ditambahkan.</td>
                                    </tr>
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
            <div aria-label="Pagination">
                <ul class="pagination my-4">
                    @if ($sipupuks->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $sipupuks->previousPageUrl() }}" rel="prev"
                                aria-label="@lang('pagination.previous')">Previous</a>
                        </li>
                    @endif


                    @if ($sipupuks->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $sipupuks->nextPageUrl() }}" rel="next"
                                aria-label="@lang('pagination.next')">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">Next</span>
                        </li>
                    @endif
                </ul>
            </div>
            <!--End Pagination-->
        </div>
        <!--End Pagi-->
    </div>

    <style>


.search-custom {
    margin-left: 10px;
    height: 42px;
    font-size: 15px;
    background-color: white;
    color: #224038;
    border-radius: 10px;
    border-color: #224038;
}
.btn-custom {
    color: #224038;
}

.btn-custom {
    width: 170px;
    height: 42px;
    background-color: white;
    padding: 10px 5px;
    border-radius: 8px; /* Sudut bulat tombol */
    text-decoration: none; /* Menghapus dekorasi tautan */
    transition: background-color 0.3s; /* Transisi hover */
}

.btn-custom:hover {
    background-color: #224038;
    color: #ffffff;
}

.text-hijau {
    color: #224038;
}

button {
    border: none;
    background: none;
}

th {
    color: #224038;
}
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/session.js') }}"></script>
    <script>

        function deleteConfirmation(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form when user confirms
                document.getElementById('deleteForm'+id).submit();
            }
        });
    }
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
    </script>
@endsection
