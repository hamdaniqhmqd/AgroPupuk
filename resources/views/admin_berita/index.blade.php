@extends('layouts.laman_admin')
@section('admin.berita')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('admin_berita.create') }}" class="btn btn-md btn-success mb-3">Tambah Berita</a>
                        <table class="table table-borderless">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col" class="text-center">NO.</th>
                                    <th scope="col" class="text-center">IMAGE</th>
                                    <th scope="col" class="text-center">ID</th>
                                    <th scope="col" class="text-center">JUDUL BERITA</th>
                                    <th scope="col" class="text-center">DESKRIPSI</th>
                                    <th scope="col" class="text-center">SUMBER LINK</th>
                                    <th scope="col" class="text-center">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($berita as $data)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/gambar berita/'. $data->image) }}" class="rounded"
                                                style="width: 150px">
                                        </td>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td>{{ $data->link }}</td>
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
