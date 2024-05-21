    <nav class="main-head">
        <div class="cover-nav">
            <div class="main-menu">
                <div class="logo">
                    <a href="{{ route('beranda') }}">
                            <img src="{{ asset('storage/image/logoweb.png') }}" style="margin-top: 2px" alt="Logo Web" width="180" height="25">
                    </a>
                </div>
                <div class="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-list-item">
                            <a href="{{ route('beranda') }}" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-list-item">
                            <a href="{{ route('produk.index') }}" class="nav-link">Produk</a>
                        </li>
                        <li class="nav-list-item">
                            <a href="{{ route('berita') }}" class="nav-link">Berita</a>
                        </li>
                        <li class="nav-list-item">
                            <a href="{{ route('sipupuk.index') }}" class="nav-link">Si Pupuk</a>
                        </li>
                        <li class="nav-list-item">
                            <a href="{{ route('tentangkami') }}" class="nav-link">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
                <div class="toggle-btn">
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fa-solid text-white fa-bars"></i>
                    </button>
                </div>
                {{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header" style="background-color: #1b342d" >
                        <img src="{{ asset('storage/image/logoweb.png') }}" alt="Logo Web" width="180" height="25"
                        class="offcanvas-title right-2" id="offcanvasRightLabel" >
                        <button type="button" class="btn-close bg-white " data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" style="background-color: #224038;">
                        <ul class="side-list">
                            <li class="side-list-item py-3" >
                                <a href="{{ route('beranda') }}" class="side-link" >Beranda</a>
                            </li>
                            <li class="side-list-item py-3">
                                <a href="{{ route('produk.index') }}" class="side-link" >Produk</a>
                            </li>
                            <li class="side-list-item py-3">
                                <a href="{{ route('berita') }}" class="side-link" >Berita</a>
                            </li>
                            <li class="side-list-item py-3">
                                <a href="{{ route('sipupuk.index') }}" class="side-link" >Si Pupuk</a>
                            </li>
                            <li class="side-list-item py-3">
                                <a href="{{ route('tentangkami') }}" class="side-link" >Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </nav>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        .cover-nav{
            width: 85%;
            margin: auto;
            z-index: 1;
        }
        .main-head{
            width: 100%;
            height: 60px;
            position: absolute;
            top: 0;
            left: 0;
            background: transparent;
            z-index: 9999;
        }
        .main-head.slidedown{
            position: fixed;
            /* background: #198754; */
            background: #224038;
            animation: slidedown .3s forwards;
            color: white;
        }
        @keyframes slidedown{
            from{
                top: -250px;
            }
            to{
                top: 0;
                box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
            }
        }

        .main-head .main-menu{
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .main-head .main-menu .logo{
            width: 30%;
        }
        .main-head .main-menu .nav-menu{
            width: 70%;
        }
        .main-head .main-menu .nav-menu .nav-list{
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }



        @media only screen and (max-width: 1130px) {
            .main-head .main-menu .nav-menu .nav-list .nav-list-item {
                padding: 10px 20px;
                margin-top: 10px;
            }
            .main-head .main-menu .nav-menu .nav-list .nav-list-item a.nav-link {
                font-size: 10px;
                line-height: 10px;
            }
        }

        .main-head .main-menu .toggle-btn{
            display: none;
        }


        @media only screen and (max-width: 900px) {
            .main-head .main-menu .toggle-btn{
                display: block;
            }
            .main-head .main-menu .toggle-btn button i :active{
                color: gray;
            }
                /* Memberi warna abu-abu pada ikon ketika tombol toggle ditekan */
            .main-head .main-menu .toggle-btn button i:active {
                color: gray;
            }

            /* Mengubah warna ikon menjadi merah ketika dihover */
            .main-head .main-menu .toggle-btn button i:hover {
                cursor: pointer;
                color: rgb(255, 0, 0);
            }
            .main-head .main-menu .nav-menu .nav-list .nav-list-item {
                display: none;
            }
            .main-head .main-menu .nav-menu .nav-list .nav-list-item .nav-link {
                display: none;
            }
        }

        @media only screen and (max-width: 935px) {
            .main-head .main-menu .nav-menu .nav-list .nav-list-item {
                padding: 5px 10px;
                margin-top: 5px;
            }
            .main-head .main-menu .nav-menu .nav-list .nav-list-item .nav-link {
                font-size: 8px;
            }
        }

        @media only screen and (max-width: 1080px) {
            .main-head .main-menu .nav-menu .nav-list .nav-list-item {
                padding: 5px 10px;
                margin-top: 8px;
            }
            .main-head .main-menu .nav-menu .nav-list .nav-list-item .nav-link {
                font-size: 9px;
                line-height: 9px;
            }
        }

        .main-head .main-menu .nav-menu .nav-list .nav-list-item{
            padding: 15px 30px;
            list-style: none;
            margin-top: 15px;
        }
        .main-head .main-menu .nav-menu .nav-list .nav-list-item .nav-link{
            display: inline-block;
            text-decoration: none;
            color: #fff;
            font-size: 15px;
            font-family: 'Montserrat', sans-serif;
            line-height: 20px;
            font-weight: 500;
            transition: all .1s ease;
        }
        .main-head.slidedown .main-menu .nav-menu .nav-list .nav-list-item .nav-link {
            color: white;
        }
        .main-head.slidedown .main-menu .nav-menu .nav-list .nav-list-item .nav-link:hover {
            color: rgb(179, 179, 179);
        }
        .main-head .main-menu .nav-menu .nav-list .nav-list-item .nav-link:hover{
            color: #000000;
        }

        .side-list {
            margin-top: 30px;
            list-style: none;
        }
        .side-list .side-list-item .side-link {
            color: #fff;
            font-size: 15px;
            margin: 15px;
            padding: 15px;
            text-decoration: none;
        }
        .side-list .side-list-item .side-link:hover {
            cursor: pointer;
            color: #ffc800;
        }



    </style>

    <script>
        const mainMenu = document.querySelector( '.main-head' );
        window.addEventListener( 'scroll', ()=> {
            if( this.scrollY > 100 ){
                mainMenu.classList.add( 'slidedown' );
            }else{
                mainMenu.classList.remove( 'slidedown' );
            }
        } );
    </script>
