<nav class="">
    <div class="atas d-flex align-items-center justify-content-start">
        <i class="sidebar_tombol bx bx-menu d-flex align-items-center justify-content-center"></i>
        <img class="" src="{{ asset('storage/image/logoweb.png') }}" alt="" />
    </div>
    <div class="daftar_menu">
        <ul class="menu_atas ps-0 mb-0">
            <li class="">
                <a href="#" class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bxs-dashboard d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="#" class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-home d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Beranda</span></a>
            </li>
            <li class="">
                <a href="#" class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-package d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Pupuk</span></a>
            </li>
            <li class="{{ request()->is('admin/berita', 'admin/berita/*') ? 'active' : '' }}">
                <a href="{{ route('admin_berita.index') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-news d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Berita</span></a>
            </li>
        </ul>
        <ul class="menu_bawah ps-0 mb-0">
            <li class="">
                <a href="#" class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-user d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Profile</span></a>
            </li>
            <li class="">
                <a href="{{ url('/logout') }}" class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-log-out d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Logout</span></a>
            </li>
        </ul>
    </div>
</nav>

{{-- <main>
    jika ingin menggunakan sidebar awali dan akhiri mengguanakan tag main
</main> --}}
