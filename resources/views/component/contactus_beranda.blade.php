<!--Contact Us -->
<div class="w-custom rounded-2 shadow mt-5 d-flex ">
    <div class="w-60 input-pesan">
        <div class="w-85 m-auto">
            <h1 class="fs-3 fw-semibold mt-5 mb-3">Contact Us</h1>
        </div>
        <div class="w-85 m-auto mb-5">
            <form class="row g-3" action="{{ route('input') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" required>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="pesan" style="height: 130px" required></textarea>
                    <label for="floatingTextarea2">Pesan</label>
                </div>
                <button type="submit" class="btn btn-success w-50 m-auto mt-5">Submit</button>
            </form>
        </div>                
    </div>
    <div class="w-40 gambar-contact">
            <img src="{{asset ('storage/image/contactus.jpg')}}" alt="Contact Us" class="w-100 h-100 rounded ml-2">
    </div>
</div>
