    <!--CSSNya-->
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}" />
    <!--code nav-->
<nav class="w-100 px-5 ps-5 bg-hijau py-4 align-items-center">
  <div class="container d-flex justify-content-between ">
      <a class="d-block w-25" href="">
          <!--Iamge Unruk logo di nav-->
          <img class="logoagro" src="{{ asset('storage/image/logoweb.png') }}" width="220" height="28" alt=""/>
      </a>
      <!--Text Nav-->
      <div class="w-50 px-0 text-center d-flex justify-content-around" id="navbarNavAltMarkup">
          <a class="nav-link active text-white" aria-current="page" href="{{ route('beranda') }}">Beranda</a>
          <a class="nav-link text-white" href="{{ route('produk.index') }}">Produk</a>
          <a class="nav-link text-white" href="{{ route('berita.index') }}">Berita</a>
          <a class="nav-link text-white" href="#">SiPupuk</a>
          <a class="nav-link text-white" href="#">Tentang Kami</a>
      </div>
      <!--End Text Nav-->
      <!--Hamburger Belom akktif-->
      <div class="hamburgermenu z-3">
          <span class="strip"></span>
          <span class="strip"></span>
          <span class="strip"></span>
      </div>
      <!-- End Hamburger Belom akktif-->
  </div>
</nav>
