<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buat Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin-sipupuk.css') }}" />
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded p-4" style="background: #f8f9fa;">
                    <h2 class="text-center text-hijau mb-4">Buat Artikel Baru</h2>
                    <form action="{{ route('sipupuks.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class=" form-group mb-3">
                            <label class=" ms-1">JUDUL</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Artikel">
                        
                            <!-- pesan error untuk judul -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row g-2">
                                <div class="col-md-6">
                                    <div class=" form-group mb-3">
                                        <label class=" ms-1">GAMBAR</label>
                                        <input type="file" accept=".jpg, .jpeg, .png" class="form-control @error('image') is-invalid @enderror" name="image">
                                    
                                        <!-- pesan error untuk gambar -->
                                        @error('image')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" form-group mb-3">
                                        <label class=" ms-1">AUTHOR</label>
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
                            


                        <div class=" form-group mb-3">
                            <label class=" ms-1">KONTEN</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="10" placeholder="Masukkan Konten Artikel ">{{ old('content') }}</textarea>
                        
                            <!-- pesan error untuk konten -->
                            @error('content')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    <div class="row">
                        <div class="text-center">
                            <button type="submit" class="btn btn-simpan me-3">SIMPAN</button>
                            {{-- <button type="reset" class="btn btn-" >RESET</button> --}}
                            <button class="btn">
                                <a href="{{ route('adminsipupuk.index') }}" class="btn btn-hapus">KEMBALI</a>
                            </button>
                        </div>
                    </div>

                    </form> 
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>

</body>
</html>