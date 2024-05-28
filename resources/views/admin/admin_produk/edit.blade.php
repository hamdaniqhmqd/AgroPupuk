@extends('layouts.laman_admin_produk')
@section('admin_produk_edit')
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
    <header class="position-relative d-flex align-items-center justify-content-between">
        <div class="page">
            <span class="list_page">Halaman Admin Edit Produk</span>
        </div>
    </header>
    <style>
        .form-group label, label {
            font-family: "Inter", sans-serif; 
            font-size: 14px; 
            color: rgb(18,55,42); 
            font-weight: bold;
        }
    </style>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('adminproduk.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">IMAGE</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @if ($product->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/gambarproduk/' . $product->image) }}" alt="Current Image" width="150px">
                                    </div>
                                @endif
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">TITLE</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $product->title) }}" placeholder="Masukkan Judul Product">
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">JENIS PUPUK</label>
                                <select class="form-control @error('jenis') is-invalid @enderror" name="jenis">
                                    <option value="npk" {{ $product->jenis == 'npk' ? 'selected' : '' }}>NPK</option>
                                    <option value="phonska" {{ $product->jenis == 'phonska' ? 'selected' : '' }}>Phonska</option>
                                    <option value="urea" {{ $product->jenis == 'urea' ? 'selected' : '' }}>Urea</option>
                                    <option value="za" {{ $product->jenis == 'za' ? 'selected' : '' }}>ZA</option>
                                </select>
                                @error('jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">DESCRIPTION</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Description Product">{{ old('description', $product->description) }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3" id="store-inputs">
                                <label class="font-weight-bold">Tambah Toko</label>
                                @foreach ($product->productStores as $store)
                                    <div class="input-group mb-3 store-group">
                                        <input type="text" class="form-control store-name @error('store_names.*') is-invalid @enderror" name="store_names[]" value="{{ $store->store_name }}" placeholder="Masukkan Nama Toko">
                                        <input type="text" class="form-control store-link @error('store_links.*') is-invalid @enderror" name="store_links[]" value="{{ $store->store_link }}" placeholder="Masukkan Link Toko">
                                        <input type="number" class="form-control store-price @error('prices.*') is-invalid @enderror" name="prices[]" value="{{ $store->price }}" placeholder="Masukkan Harga Toko">
                                        <select class="form-control marketplace @error('marketplaces.*') is-invalid @enderror" name="marketplaces[]">
                                            <option value="">Pilih nama marketplace</option>
                                            <option value="Tokopedia" {{ $store->marketplace == 'Tokopedia' ? 'selected' : '' }}>Tokopedia</option>
                                            <option value="BliBli" {{ $store->marketplace == 'BliBli' ? 'selected' : '' }}>BliBli</option>
                                            <option value="Shopee" {{ $store->marketplace == 'Shopee' ? 'selected' : '' }}>Shopee</option>
                                            <option value="Lazada" {{ $store->marketplace == 'Lazada' ? 'selected' : '' }}>Lazada</option>
                                        </select>
                                        <button type="button" class="btn btn-danger remove-store">Hapus Toko</button>
                                    </div>
                                    @error('store_names.*')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    @error('store_links.*')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    @error('prices.*')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    @error('marketplaces.*')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                @endforeach
                                <div class="input-group mb-3 store-group">
                                    <input type="text" class="form-control store-name" name="store_names[]" placeholder="Masukkan Nama Toko">
                                    <input type="text" class="form-control store-link" name="store_links[]" placeholder="Masukkan Link Toko">
                                    <input type="number" class="form-control store-price" name="prices[]" placeholder="Masukkan Harga Toko">
                                    <select class="form-control marketplace" name="marketplaces[]">
                                        <option value="">Pilih nama marketplace</option>
                                        <option value="Tokopedia">Tokopedia</option>
                                        <option value="BliBli">BliBli</option>
                                        <option value="Shopee">Shopee</option>
                                        <option value="Lazada">Lazada</option>
                                    </select>
                                    <button type="button" class="btn btn-danger remove-store">Hapus Toko</button>
                                </div>
                            </div>

                            <button type="button" class="btn btn-success add-store">Tambah Toko</button>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addStoreButton = document.querySelector('.add-store');
        const storeInputs = document.querySelector('#store-inputs');

        addStoreButton.addEventListener('click', function() {
            const storeGroup = document.createElement('div');
            storeGroup.classList.add('input-group', 'mb-3', 'store-group');
            storeGroup.innerHTML = `
                <input type="text" class="form-control store-name" name="store_names[]" placeholder="Masukkan Nama Toko">
                <input type="text" class="form-control store-link" name="store_links[]" placeholder="Masukkan Link Toko">
                <input type="number" class="form-control store-price" name="prices[]" placeholder="Masukkan Harga Toko">
                <select class="form-control marketplace" name="marketplaces[]">
                    <option value="">Pilih nama marketplace</option>
                    <option value="Tokopedia">Tokopedia</option>
                    <option value="BliBli">BliBli</option>
                    <option value="Shopee">Shopee</option>
                    <option value="Lazada">Lazada</option>
                </select>
                <button type="button" class="btn btn-danger remove-store">Hapus Toko</button>
            `;
            storeInputs.appendChild(storeGroup);
        });

        storeInputs.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-store')) {
                const storeGroup = event.target.closest('.store-group');
                storeInputs.removeChild(storeGroup);
            }
        });
    });
</script>
@endsection
