<div class="container mt-5 mb-5 ">
    <div class="row row-cols-4  row-cols-md-4 row-cols-sm-4  g-4">
        <div class="card-body" style="background-color: #E3E3E3">
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
                {{-- @forelse ($berita as $data) --}}
                    <div class="card m-2 border-0 hover" style="width: 250px; height: 300px;">
                        <img 
                        {{-- <img src="{{ asset('/storage'. $data->image)}}" --}}
                            class="card-img-top object-fit-cover rounded" alt="card" style="height: 150px;">
                        <div class="card-body">
                            <h5 class="card-title text-truncate"> </h5> 
                            {{-- {{ $data->name }} --}}
                            <p class="card-text text-truncate" style="height: 50px;"> </p> 
                            {{-- {{ $data->description }} --}}
                            <a class="link-offset-2 link-underline link-underline-opacity-0" href=" ">
                                {{-- {{ $data->link }} --}}
                                Lihat selengkapnya
                            </a>
                        </div>
                    </div>
                {{-- @empty --}}
                    <div class="alert alert-danger">
                        Data berita tidak ditemukan.
                    </div>
                {{-- @endforelse --}}
            </div>
        </div>
    </div>
</div>
