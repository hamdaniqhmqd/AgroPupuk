<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('admin_berita.update', $berita->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">IMAGE</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image" placeholder="Masukkan Gambar Berita">
                                <!-- error message untuk image -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="name" placeholder="Masukkan Judul Berita" value="{{ old('name', $berita->name) }}">
                                <!-- error message untuk title -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Sumber Link</label>
                                <input type="text" class="form-control @error('link') is-invalid @enderror"
                                    name="link" value="{{ old('link', $berita->link) }}"
                                    placeholder="Masukkan Sumber Link Berita">
                                <!-- error message untuk name -->
                                @error('link')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5"
                                    placeholder="Masukkan Deskripsi Berita">{{ old('description', $berita->description) }}</textarea>
                                <!-- error message untuk description -->
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <a href="{{ route('admin_berita.index') }}" class="btn btn-md btn-dark me-3">Kembali</a>
                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>

</html>
