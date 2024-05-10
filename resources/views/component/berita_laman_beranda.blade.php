    <div class="container mt-5 mb-5 ">
        <div class="row row-cols-4 row-cols-md-4 row-cols-sm-4 g-4">
            <div class="card-body">
                <div class="row m-2 mr-3 ml-3">
                    <div class="col-md-6">
                        <h2 class="">Berita Trending</h2>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <div class="align-content-end">
                            <a class="btn" style="background-color: #224038; color: #E3E3E3">Lihat semua</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex flex-wrap justify-content-center">
                    {{-- sebuah perulangan dengan mengambil data dari variabel $berita dan di masukan ke variabel $data
                        jika ada data dari tabel data beritas maka akan menampilkan data tersebut --}}
                    @forelse ($berita as $data)
                        <div class="card m-2 border-0 hover"
                            style="width: 250px; height: 300px; background-color: transparent; transition: background-color 0.3s ease;">
                            <div class="card-hover rounded">
                                <img src="{{ asset('/storage/gambar berita/' . $data->gambar_berita) }}"
                                    class="card-img-top object-fit-cover rounded" alt="card" style="height: 150px;">
                                <div class="card-body m-1 p-2">
                                    <h5 class="card-title" style="height: 48px; overflow: hidden">{{ $data->nama_berita }}</h5>
                                    <p class="card-text" style="height: 48px; overflow: hidden">{{ $data->deskripsi_berita }}
                                    </p>
                                    <a class="link-offset-2 link-underline link-underline-opacity-0"
                                        href="{{ route('berita.pengunjung', ['id_berita' => $data->id_berita]) }}" target="_blank">
                                        Lihat selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty {{-- digunakan untuk menampilkan pesan jika data di dalam beritas kosong --}}
                        <div class="alert alert-danger">
                            Data berita tidak ditemukan.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
