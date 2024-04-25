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
                            <a href="{{ route('berita.index') }}" class="nav-link">Berita</a>
                        </li>
                        <li class="nav-list-item">
                            <a href="#" class="nav-link">Si Pupuk</a>
                        </li>
                        <li class="nav-list-item">
                            <a href="{{ route('tentangkami') }}" class="nav-link">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
                <div class="toggle-btn">
                    <button class="btn">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        .cover-nav{
            width: 1280px;
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

        .main-head .main-menu .toggle-btn{
            display: none;
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
