@extends('layouts.laman_admin_produk')
@section('admin_produk_create')
    <header class="position-relative d-flex align-items-center justify-content-between">
        <div class="page">
            <span class="list_page">admin</span>
        </div>
        <div class="profile d-flex align-items-center">
            <span class="nama_admin">admin</span>
            @if (auth()->user()->gambar)
                <img class="object-fit-fill rounded" src="{{ asset('storage/profile/' . $admin->gambar) }}" alt="profile" loading="lazy" />
            @else
                <img class="object-fit-fill rounded" src="{{ asset('/gambar/user.png') }}" alt="profile" loading="lazy" />
            @endif
        </div>
    </header>
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

                            <div class="form-group mb-3" id="store-inputs">
                                <label class="font-weight-bold">Tambah Toko</label>
                                <div class="input-group mb-3">
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
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.add-store').addEventListener('click', function() {
                const storeInputs = document.getElementById('store-inputs');
                const newInputGroup = document.createElement('div');
                newInputGroup.className = 'input-group mb-3';
                newInputGroup.innerHTML = `
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
                storeInputs.appendChild(newInputGroup);

                newInputGroup.querySelector('.remove-store').addEventListener('click', function() {
                    storeInputs.removeChild(newInputGroup);
                });
            });
        });
    </script>
@endsection
