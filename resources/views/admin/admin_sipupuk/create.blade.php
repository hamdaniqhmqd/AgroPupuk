<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk Baru - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded p-4" style="background: #f8f9fa;">
                    <h2 class="text-center mb-4">Form Tambah Artikel Baru</h2>
                    <form action="{{ route('sipupuks.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf

                        <div class="mb-3">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" accept=".jpg, .jpeg, .png" class="form-control @error('image') is-invalid @enderror" name="image">
                        
                            <!-- pesan error untuk gambar -->
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        

                        <div class="mb-3">
                            <label class="font-weight-bold">JUDUL</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Artikel">
                        
                            <!-- pesan error untuk judul -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-weight-bold">KONTEN</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="10" placeholder="Masukkan Konten Artikel ">{{ old('content') }}</textarea>
                        
                            <!-- pesan error untuk konten -->
                            @error('content')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="font-weight-bold">AUTHOR</label>
                                    <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}" placeholder="Masukkan Nama Author">
                                
                                    <!-- pesan error untuk author -->
                                    @error('author')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary me-3">SIMPAN</button>
                            <button type="reset" class="btn btn-warning" >RESET</button>
                            <button class="btn btn-succes">
                                <a href="{{ route('adminsipupuk.index') }}" class="btn btn-secondary">KEMBALI</a>
                            </button>
                        </div>

                    </form> 
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     const form = document.querySelector('form');
        //     form.addEventListener('submit', function() {
        //         alert('Data Berhasil Disimpan!');
        //     });
        // });
        CKEDITOR.replace( 'content' );
    </script>

</body>
</html>
