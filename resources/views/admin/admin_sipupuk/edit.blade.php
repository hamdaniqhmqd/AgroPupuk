<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk Baru - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin-sipupuk.css') }}" />

</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded p-4" style="background: #f8f9fa;">
                    <h2 class="text-center mb-4">Edit Artikel</h2>
                    <form action="{{ route('adminsipupuk.update', $sipupuks->id) }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label class="font-weight-bold">JUDUL</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $sipupuks->title) }}" placeholder="Masukkan Judul Artikel">
                        
                            <!-- pesan error untuk judul -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                <div class="row">
                    <div class="col-md-6">
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
                    </div>  
                        <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="font-weight-bold">AUTHOR</label>
                                    <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author', $sipupuks->author) }}" placeholder="Masukkan Nama Author">
                                
                                    <!-- pesan error untuk author -->
                                    @error('author')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="font-weight-bold">KONTEN</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="10" placeholder="Masukkan Konten Artikel ">{{ old('content', $sipupuks->content) }}</textarea>
                        
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
                                <button type="reset" class="btn btn-secondary " >RESET</button>
                                <button class="btn">
                                    <a href="{{ route('adminsipupuk.index') }}" class="btn btn-hapus">KEMBALI</a>
                                </button>
                            </div>
                        </div>
                        </div>

                    </form> 
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
         // untuk menggunakan sweetalert2 pada tombol simpan
        document.querySelector('.btn-simpan').addEventListener('click', function(){
            Swal.fire({
                title: 'Apakah Anda yakin ingin menyimpan perubahan?',
                showCancelButton: true,
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    document.querySelector('form').submit();
                }  else if (result.isDenied) {
            Swal.fire("Changes are not saved", "", "info");
        }
            });
        });
        CKEDITOR.replace( 'content' );
    </script>

</body>
</html>