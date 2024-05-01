<nav class="">
    <div class="atas d-flex align-items-center justify-content-start">
        <i class="sidebar_tombol bi bi-list d-flex align-items-center justify-content-center"></i>
        <img class="" src="{{ asset('storage/image/logoweb.png') }}" alt="" />
    </div>
    <div class="daftar_menu">
        <ul class="menu_atas ps-0 mb-0">
            <li class="{{ request()->is('/dashboard_admin') ? 'active' : '' }}">
                <a href="/" class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bi bi-archive d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="#" class="menu flex-fill d-flex align-items-center justify-content-start"
                    data-keterangan="Halaman Beranda">
                    <i class="bi bi-house d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Beranda</span></a>
            </li>
            <li class="">
                <a href="#" class="menu flex-fill d-flex align-items-center justify-content-start"
                    data-keterangan="Halaman Beranda">
                    <i class="bi bi-bag d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Pupuk</span></a>
            </li>
            <li class="{{ request()->is('admin_berita', 'admin_berita/*') ? 'active' : '' }}">
                <a href="{{ route('admin_berita.index') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bi bi-newspaper d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Berita</span></a>
            </li>
        </ul>
        <ul class="menu_bawah ps-0 mb-0">
            <li class="">
                <a href="#" class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bi bi-person-circle d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Profile</span></a>
            </li>
            <li class="">
                <a href="#" class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bi bi-box-arrow-left d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Logout</span></a>
            </li>
        </ul>
    </div>
</nav>

{{-- <main>
    jika ingin menggunakan sidebar awali dan akhiri mengguanakan tag main
</main> --}}
