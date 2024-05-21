<style>
    article.side {
        width: 250px;
        height: 110px;
        background-color: var(--abu);
    }

    article.side:hover {
        background-color: white;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.25);
    }

    article.side h5 {
        font-size: 18px;
        height: 62px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    article.utama {
        width: 250px;
        height: 300px;
        background-color: var(--abu);
    }

    article.utama img {
        height: 140px;
    }

    article.utama .card-title {
        font-size: 18px;
        height: 42px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    article.utama .card-text {
        font-size: 14px;
        height: 60px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    article.utama:hover {
        background-color: white;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.25);
    }
</style>
<div class="container mt-5 mb-5 ">
    <div class="row row-cols-4 row-cols-md-4 row-cols-sm-4 g-4">
        <div class="card-body">
            <div class="row m-2 mr-3 ml-3">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="100"
                data-aos-duration="1000">
                    <h2 class="">Berita Trending</h2>
                </div>
                <div class="col-md-6 d-flex justify-content-end" data-aos="fade-left" data-aos-delay="100"
                data-aos-duration="1000">
                    <div class="align-content-end">
                        <a href="{{ route('berita') }}" class="btn" style="background-color: #224038; color: #E3E3E3">Lihat semua</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex flex-wrap justify-content-center" data-aos="fade-up" data-aos-delay="100"
            data-aos-duration="800">
                {{-- sebuah perulangan dengan mengambil data dari variabel $berita dan di masukan ke variabel $data
                        jika ada data dari tabel data beritas maka akan menampilkan data tersebut --}}
                @forelse ($berita as $data)
                    <article class="utama card m-2 border-0">
                        <img src="{{ asset('/storage/gambar berita/' . $data->gambar_berita) }}"
                            class="card-img-top object-fit-cover rounded" alt="{{ $data->gambar_berita }}">
                        <div class="card-body m-2 p-1">
                            <h5 class="card-title mb-1">{{ $data->judul_berita }}</h5>
                            <p class="card-text mb-1">
                                {{ $data->deskripsi_berita }}
                            </p>
                            <a class="link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('berita.pengunjung', ['id_berita' => $data->id_berita]) }}"
                                target="_blank">
                                Lihat selengkapnya
                            </a>
                        </div>
                    </article>
                @empty {{-- digunakan untuk menampilkan pesan jika data di dalam beritas kosong --}}
                    <div class="alert bg-body-secondary text-dark " >
                        Data berita tidak ditemukan.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
