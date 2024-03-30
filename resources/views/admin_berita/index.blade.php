@extends('layouts.laman_admin_berita')
@section('admin.berita')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="row mb-2 mt-2">
                            <div class="col-md-6 d-flex">
                                <h2 class="fw-bold">Berita</h2>
                                <a href="{{ route('admin_berita.create') }}" class="btn btn-success ms-4">Tambah Berita</a>
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="flex-fill">
                                    <form action="{{ route('admin_berita.index') }}" class="" method="GET">
                                        <input class="form-control me-2" type="text"
                                            placeholder="Ketik berita yang di cari" name="search"
                                            value="{{ $request->get('search') }}">
                                    </form>
                                </div>
                            </div>
                            <hr style="border: 2px solid #224038;" class="mt-5">
                        </div>
                        <table class="table table-borderless table-responsive table-hover table-striped">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col" class="text-center p-1" style="width: 3%;">NO.</th>
                                    <th scope="col" class="text-center">IMAGE</th>
                                    <th scope="col" class="text-center p-1" style="width: 10%;">ID</th>
                                    <th scope="col" class="text-center p-1" style="width: 10%;">JUDUL BERITA</th>
                                    <th scope="col" class="text-center p-1" style="width: 30%;">DESKRIPSI</th>
                                    <th scope="col" class="text-center p-1" style="width: 15%;">SUMBER LINK</th>
                                    <th scope="col" class="text-center p-1" style="width: 17%;">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($berita as $data)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/gambar berita/' . $data->image) }}" class="rounded"
                                                style="width: 150px">
                                        </td>
                                        <td class="">
                                            {{ $data->id }}</td>
                                        <td class="">{{ $data->name }}</td>
                                        <td class="text-break">{{ $data->description }}</td>
                                        <td class="">{{ $data->link }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('admin_berita.destroy', $data->id) }}" method="POST">
                                                <a href="{{ route('admin_berita.show', $data->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('admin_berita.edit', $data->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data berita belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $berita->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
