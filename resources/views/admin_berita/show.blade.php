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
    <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="d-flex gap-3 justify-content-center">
                <div class="col-md-5">
                    <div class="border-0 shadow-sm rounded d-flex">
                        <img src="{{ asset('/storage/gambar berita/' . $berita->image) }}" class="rounded"
                            style="width: 100%;">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card border-0 shadow-sm rounded" style="height: 359.1px;">
                        <div class="card-body">
                            <div class="p-1 m-0"><strong>Id dari berita : </strong><br>{{ $berita->id }}</div>
                            <div class="p-1 m-0"><strong>Nama berita :</strong><br>{{ $berita->name }}</div>
                            <div class="p-1 m-0"><strong>Sumber link : </strong><br>
                                <a href="{{ $berita->link }}" target="_blank">{{ $berita->link }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <div class="p-1 m-0"><strong>Deskripsi berita :</strong><br>{{ $berita->description }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" d-flex gap-3 justify-content-center mt-3">
                <div class="col-md-5">
                    <form action="{{ route('admin_berita.destroy', $berita->id) }}" method="POST" id="formHapusData"
                        onsubmit="return hapusData()" class="d-flex gap-3">
                        <a href="{{ route('admin_berita.edit', $berita->id) }}" class="btn btn-lg btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-lg btn-danger">Hapus</button>
                    </form>
                </div>
                <div class="col-md-5 d-flex justify-content-end">
                    <a href="{{ route('admin_berita.index') }}" class="btn btn-lg btn-dark">Kembali</a>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
