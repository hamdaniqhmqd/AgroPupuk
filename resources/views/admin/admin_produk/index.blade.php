@extends('layouts.laman_admin_produk')
{{-- digunakan untuk memanggil file --}}
{{-- digunakan untuk meengidentifikasi nama dari section --}}
@section('admin_produk')
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
                <img class="object-fit-fill rounded" src="{{ asset('/gambar/user.png') }}" alt="profile" loading="lazy" />
            @endif

        </div>
    </header>
    <section class="mt-2">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="text-center my-4" style="color: rgb(18,55,42)">Dashboard Produk Admin</h3>
                        <hr>
                    </div>
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <a href="{{ route('adminproduk.create') }}" class="btn btn-md btn-success mb-3">ADD PRODUCT</a>
                            <!--untuk admin_produk ga pake underscore-->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">IMAGE</th>
                                        <th scope="col">TITLE</th>
                                        <th scope="col">JENIS PUPUK</th>
                                        <th scope="col">AUTHOR</th>
                                        <th scope="col" style="width: 20%">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/gambarproduk/' . $product->image) }}"
                                                    class="rounded" style="width: 140px">
                                            </td>
                                            <td>{{ $product->title }}</td>

                                            <td>{{ $product->jenis }}</td>
                                            <td>{{ $product->user->username ?? 'Unknown' }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('adminproduk.destroy', $product->id) }}"
                                                    method="POST">
                                                    <a href="{{ route('adminproduk.show', $product->id) }}"
                                                        class="btn btn-sm btn-dark">SHOW</a>
                                                    <a href="{{ route('adminproduk.edit', $product->id) }}"
                                                        class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Products belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/session.js') }}"></script>

    <script>
        //message with sweetalert
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
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
@endsection
