<nav class="">
    <div class="atas d-flex align-items-center justify-content-start">
        <i class="sidebar_tombol bx bx-menu d-flex align-items-center justify-content-center"></i>
        <img class="" src="{{ asset('storage/image/logoweb.png') }}" alt="" />
    </div>
    <div class="daftar_menu">
        <ul class="menu_atas ps-0 mb-0">
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bxs-dashboard d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->is('') ? 'active' : '' }}">
                <a href="#" class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-home d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Beranda</span></a>
            </li>
            <li class="{{ request()->is('adminsipupuk') ? 'active' : '' }}">
                <a href="{{ url('adminsipupuk') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start">
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
                <a href="{{ url('/admin/profile/edit') }}" class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-user d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Profile</span></a>
            </li>
            <li class="">
                <a href="{{ url('/logout') }}" class="menu flex-fill d-flex align-items-center justify-content-start" onclick="confirmLogout(event)">
                    <i class="bx bx-log-out d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    function confirmLogout(event) {
        // Menghentikan aksi default dari tag <a>
        event.preventDefault();

        // Menampilkan peringatan SweetAlert 2
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Arep Login ?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke halaman logout jika diklik "Ya"
                window.location.href = event.target.href;
            } else {
                // Tidak melakukan apa-apa jika diklik "Tidak"
            }
        });
    }
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

:root {
    --icon-color: #fff;
    --sidebar-color: #224038;
    --text-hover-color: #e5e5e5;

    --hijau: #224038;
    --putih: #ffffff;
    --abu-abu: #E3E3E3;
    --abu-hitam: #666666;

    --primary: #12372A;
    --secondary: #436850;
    --white-smoth: #ADBC9F;
    --white: #f5f5f5;

    --blue: #0071FF;
    --light-blue: #B6DBF6;
    --dark-blue: #005DD1;
    --grey: #d4d2d2;

    --tran-05: all 0.5s ease;
    --tran-10: all 1s ease;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    font-size: 0.875rem;
}

/* mulai edit sidebar */
nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 242px;
    height: 100%;
    z-index: 100;
    padding: 9px 6px;
    background-color: var(--primary);
    transition: var(--tran-05);
}

nav.close {
    width: 62px;
}

nav .atas {
    padding: 5px;
    gap: 10px;
}

.atas i {
    font-size: 34px;
    min-width: 40px;
    height: 100%;
    cursor: pointer;
    color: var(--white);
}

.atas img {
    width: 170px;
    transition: var(--tran-05);
}

nav.close .atas img {
    width: 0;
    opacity: 0;
    pointer-events: none;
}

nav .daftar_menu {
    margin-top: 10px;
    height: calc(100% - 60px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.daftar_menu li {
    border-radius: 5px;
    list-style: none;
}

li.active {
    background-color: var(--white);
    color: var(--primary);
}

.daftar_menu li.active i {
    color: var(--primary);
}

li.active span.nama_nav {
    color: var(--primary);
}

.daftar_menu li a i {
    font-size: 26px;
    min-width: 40px;
    height: 100%;
    color: var(--icon-color);
}

.daftar_menu li .nama_nav {
    font-size: 16px;
    font-weight: 400;
    transition: var(--tran-05);
}

nav.close .daftar_menu li .nama_nav {
    opacity: 0;
    font-size: 0;
    pointer-events: none;
}

.daftar_menu li a {
    padding: 5px;
    display: flex;
    gap: 10px;
    align-items: center;
    text-decoration: none;
    color: var(--icon-color);
    position: relative;
}

.daftar_menu li:hover {
    background-color: #fff;
}

.daftar_menu li:hover i {
    color: var(--primary);
}

.daftar_menu li:hover .nama_nav {
    color: var(--primary);
}

.daftar_menu .menu_atas {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.menu_atas li,
.menu_bawah li {
    display: flex;
    justify-content: space-between;
}

.daftar_menu .menu_bawah {
    position: relative;
    display: flex;
    justify-content: center;
    flex-direction: column;
    gap: 12px;
}

.menu_bawah img {
    width: 40px;
    height: 40px;
    object-fit: cover;
}

/* akhir edit sidebar */

/* awal edit main */
main {
    left: 242px;
    background-color: var(--white);
    min-height: 100vh;
    width: calc(100% - 242px);
    padding: 10px 14px;
    transition: var(--tran-05);
}

nav.close~main {
    left: 62px;
    width: calc(100% - 62px);
}

</style>

{{-- <main>
    jika ingin menggunakan sidebar awali dan akhiri mengguanakan tag main
</main> --}}
