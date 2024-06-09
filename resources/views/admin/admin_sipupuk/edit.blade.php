<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin-sipupuk.css') }}" />
    <!-- Include stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded p-4" style="background: #f8f9fa;">
                    <h2 class="text-center mb-4">Edit Artikel</h2>
                    <form action="{{ route('adminsipupuk.update', $sipupuks->id) }}" id="saveForm{{ $sipupuks->id }}"  
                        onsubmit="return saveData({{ $sipupuks->id }})" method="POST" enctype="multipart/form-data">
                    
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
                            <input type="file"accept="image/jpeg, image/png , image/jpg" class="form-control @error('image') is-invalid @enderror" value="{{ old('image', $sipupuks->image) }}" name="image">
                        
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
                                    <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author', $sipupuks->author) }}" disabled >
                                
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
                            <textarea id="editor" class="form-control @error('content') is-invalid @enderror" name="content" rows="10" placeholder="Masukkan Konten Artikel ">{{ old('content', $sipupuks->content) }}</textarea>
                        
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
    const quill = new Quill('#editor', {
        theme: 'snow'
    });
    </script>
    <script>
         // untuk menggunakan sweetalert2 pada tombol simpan
        function saveData(id) {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menyimpan perubahan?',
                showCancelButton: true,
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form when user confirms
                document.getElementById('saveForm'+id).submit();
            }
            else {
                return false;
            }
        });
        }
    </script>

</body>
</html>
