<style>
    @media only screen and (max-width: 800px) {
        .jarak-text  p {
            display: none;
        }
        .logo-iki {
            display: flex;
            justify-content: center; 
            align-items: center; 
        }
        .image {
            width: 70;
            margin: auto;
        }
    }

    .bg-agro {
    width: 100%;
    height: 250px;
    /* background-color: #198754; */
    background-color: #224038;
}

</style>

<div class="bg-agro d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="logo-iki d-flex justify-content-between align-items-center">
            <img src="{{ asset('storage/image/logobn.png') }}" class="my-auto image" width="280"
                height="33" alt="agropupuk" style="image-rendering:pixelated; image-rendering: -moz-crisp-edges;">
            <div class="jarak-text d-flex">
                <p class="my-auto fs-6 text-white p-3 flex-fill">Satukan </p>
                <p class="my-auto fs-6 text-white p-3 flex-fill">Sinergi</p>
                <p class="my-auto fs-6 text-white p-3 flex-fill">Untuk</p>
                <p class="my-auto fs-6 text-white p-3 flex-fill">Petani</p>
            </div>
        </div>
    </div>
</div>