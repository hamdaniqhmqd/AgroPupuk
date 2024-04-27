<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Produk - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
@php
    use Illuminate\Support\Str;
@endphp
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h1 class="text-center my-4">Tutorial Laravel 11 untuk Pemula</h1>
                    <h3 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('adminsipupuk.create') }}" class="btn btn-md btn-success mb-3">TAMBAH ARTIKEL</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center" >
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                    <th scope="col">ADMIN</th>
                                    <th scope="col" style="width: 20%">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sipupuks as $sipupuk)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/sipupuks/'.$sipupuk->image) }}" class="rounded" width="150" height="70">
                                            {{-- <img src="{{ asset('/storage/sipupuks/'.$sipupuk->image) }}" class="rounded" width="150" height="70"> --}}
                                        </td>
                                        <td style="width: 200px;">{{ $sipupuk->title }}</td>
                                        {{-- <td>{{ $sipupuk->content }}</td> --}}
                                        {{-- <td style="width: 550px; height:80px;">
                                            <div class="pembungkus" style="max-width: 100%; max-height:100%;">
                                                {{ Str::limit($sipupuk->content, 100) }}
                                            </div>
                                        </td> --}}
                                        <td style="max-width: 600px; max-height: 80px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                                            {{-- {!! Str::limit($sipupuk->content, 100) !!} --}}
                                            {!! html_entity_decode(Str::limit($sipupuk->content, 100)) !!}
                                        </td>
                                        <td style="width: 100px;" >{{ $sipupuk->author }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('adminsipupuk.destroy', $sipupuk->id) }}" method="POST">
                                                <a href="{{ route('adminsipupuk.show', $sipupuk->id) }}" class="btn btn-sm btn-dark">LIHAT</a>
                                                <a href="{{ route('adminsipupuk.edit', $sipupuk->id) }}" class="btn btn-sm btn-primary">UBAH</a>                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Produk belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //pesan dengan sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
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

