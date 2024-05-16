<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('adminproduk.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">IMAGE</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">TITLE</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Product">
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">JENIS PUPUK</label>
                                <select class="form-control @error('jenis') is-invalid @enderror" name="jenis">
                                    <option value="npk">NPK</option>
                                    <option value="phonska">Phonska</option>
                                    <option value="urea">Urea</option>
                                    <option value="za">ZA +</option>
                                </select>
                                @error('jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">DESCRIPTION</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Deskripsi Product">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">PRICE</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Masukkan Harga Product">
                                @error('price')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3" id="store-inputs">
                                <label class="font-weight-bold">Tambah Toko</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control store-name" name="store_names[]" placeholder="Masukkan Nama Toko">
                                    <input type="text" class="form-control store-link" name="store_links[]" placeholder="Masukkan Link Toko">
                                    <select class="form-control marketplace" name="marketplaces[]">
                                        <option value="Tokopedia">Tokopedia</option>
                                        <option value="BliBli">BliBli</option>
                                        <option value="Shopee">Shopee</option>
                                        <option value="Lazada">Lazada</option>
                                    </select>
                                    <button type="button" class="btn btn-secondary add-store">Tambah Toko</button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SAVE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('.add-store').addEventListener('click', function () {
                const storeInputs = document.getElementById('store-inputs');
                const newInputGroup = document.createElement('div');
                newInputGroup.className = 'input-group mb-3';
                newInputGroup.innerHTML = `
                    <input type="text" class="form-control store-name" name="store_names[]" placeholder="Masukkan Nama Toko">
                    <input type="text" class="form-control store-link" name="store_links[]" placeholder="Masukkan Link Toko">
                    <select class="form-control marketplace" name="marketplaces[]">
                        <option value="Tokopedia">Tokopedia</option>
                        <option value="BliBli">BliBli</option>
                        <option value="Shopee">Shopee</option>
                        <option value="Lazada">Lazada</option>
                    </select>
                    <button type="button" class="btn btn-secondary remove-store">Hapus Toko</button>
                `;
                storeInputs.appendChild(newInputGroup);

                newInputGroup.querySelector('.remove-store').addEventListener('click', function () {
                    storeInputs.removeChild(newInputGroup);
                });
            });
        });
    </script>
</body>
</html>
