



        <!-- Artike Prodduk -->
        <div style="width: 90%; margin: auto;" data-aos="fade-up" data-aos-delay="100"
        data-aos-duration="1500">
            <h3 class="mt-5 text-center py-2 fs-1 fw-bold warna-hijau" >Populer Article</h3>
            <p class="fw-medium fs-5 text-center text-secondary" > Informasi Terkait Pupuk Dan Pertanian </p>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    @forelse ($sipupuks as $sipupuk)
                        <div class="col-12 col-md-6 col-lg-3 mb-4">
                            <div class="card h-100 shadow animate-card" style="width: 100%; display: flex; flex-direction: column; justify-content: space-between; 
                            transition: transform 0.5s ease;">
                                <img src="{{ asset('storage/gambar_sipupuk/' . $sipupuk->image) }}" alt="{{ $sipupuk->title }}" style="object-fit: cover; width: 100%; height: 160px;" class="card-img-top">
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title fw-semibold warna-hijau lh-sm">{{ Str::limit($sipupuk->title, 50) }}</h5>
                                        <p class="card-text lh-sm">{{ Str::limit(strip_tags($sipupuk->content, 20)) }}</p>
                                    </div>
                                    <button class="btn mt-2" style="background-color: #224038;">
                                        <a class="text-decoration-none text-white" href="{{ route('sipupuk.show', $sipupuk->id) }}">BACA SELENGKAPNYA <i class="bi bi-arrow-right"></i></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert bg-body-secondary text-black text-center col-lg-12">
                            Artikel belum Tersedia.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="w-100 d-flex justify-content-center mt-3 mb-5" >
            <div class="btn-artikel-lain" data-aos="zoom-in" data-aos-duration="500">
                <a class="text-decoration-none link-dalam" href="{{ route('sipupuk.index') }}"> ARTIKEL LAINYA  <i class="bi bi-arrow-right"></i> </a>
            </div>
        </div>

