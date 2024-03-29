<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-2">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('/storage/gambar berita/' . $berita->image) }}" class="rounded"
                            style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>Nama berita : {{ $berita->name }}</h3>
                        <hr />
                        <p>Id dari berita : {{ $berita->id }}</p>
                        <hr />
                        <p>Deskripsi berita : {{ $berita->description }}</p>
                        <hr />
                        <p>Sumber link : <a href="{{ $berita->link }}" target="_blank">{{ $berita->link }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 border-0 shadow-sm rounded">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('admin_berita.destroy', $berita->id) }}" method="POST">
                            <a href="{{ route('admin_berita.index') }}" class="btn btn-sm btn-dark">Kembali</a>
                            <a href="{{ route('admin_berita.edit', $berita->id) }}"
                                class="btn btn-sm btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
