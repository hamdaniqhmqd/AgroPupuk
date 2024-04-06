{{-- <div class="sidebar">
        <h2>AgroPupuk</h2>
        <ul>
        
        <li><a href="{{ route('profil') }}">Profil</a></li>
        <li><a href="{{ route('produk') }}">Produk</a></li>
        <li><a href="{{ route('postingan') }}">Postingan</a></li>
        <li><a href="{{ route('halaman') }}">Halaman</a></li>
    
        </ul>
    </div> --}}

    <!--Sidebar-->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!--Sidebar-->
    <nav class="sidebar">
        <div class="sidebar-top-wrapper">
        <div class="sidebar-top">
            <a href="#" class="logo__wrapper">
                <img src="{{ asset('storage/image/ap.png') }}" class="logo-small"alt="Logo" />
            <span class="hide">
                <!-- <img src="../img/webpupuk.png" alt="Logo" class="logo-big"> -->
                <h3 style="margin-left: 20px;">AgroPupuk</h3>
            </span>
            </a>
        </div>
        <div class="expand-btn">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.00979 2.72L10.3565 7.06667C10.8698 7.58 10.8698 8.42 10.3565 8.93333L6.00979 13.28"
                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        </div>
        <div class="search__wrapper">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
            d="M9 9L13 13M5.66667 10.3333C3.08934 10.3333 1 8.244 1 5.66667C1 3.08934 3.08934 1 5.66667 1C8.244 1 10.3333 3.08934 10.3333 5.66667C10.3333 8.244 8.244 10.3333 5.66667 10.3333Z"
            stroke="#697089" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <input type="search" placeholder="Search for anything...">
        </div>
        <div class="sidebar-links">
        <h2>Main</h2>
        <ul>
            <li>
            <a href="#dashboard" title="Dashboard" class="tooltip">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 4h6v8h-6z" />
                <path d="M4 16h6v4h-6z" />
                <path d="M14 12h6v8h-6z" />
                <path d="M14 4h6v4h-6z" />
                </svg>
                <span class="link hide">Dashboard</span>
                <span class="tooltip__content">Dashboard</span>
            </a>
            </li>
            <li>
            <a href="#products" title="Products" class="tooltip">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                <path d="M12 12l8 -4.5" />
                <path d="M12 12l0 9" />
                <path d="M12 12l-8 -4.5" />
                </svg>
                <span class="link hide">Products</span>
                <span class="tooltip__content">Products</span>
            </a>
            </li>
            <li>
            <a href="#reports" title="Reports" class="tooltip">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-analytics" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                <path d="M9 17v-5" />
                <path d="M12 17v-1" />
                <path d="M15 17v-3" />
                </svg>
                <span class="link hide">Reports</span>
                <span class="tooltip__content">Reports</span>
            </a>
            </li>
            <li>
            <a href="#news" title="News" class="tooltip">
                <span class="material-symbols-outlined ">
                    <span class="material-symbols-outlined"  style="font-size:27.2px; stroke: none; margin-left: 2px;" >
                    breaking_news
                    </span>
                </span>
                <span class="link hide">News</span>
                <span class="tooltip__content">News</span>
            </a>
            </li>
            <li>
            <a href="#content" title="Content" class="tooltip">
                <span class="material-symbols-outlined ">
                    <span class="material-symbols-outlined"  style="font-size:27.2px; stroke: none; margin-left: 2px;" >
                        folder_copy
                    </span>
                </span>
                <span class="link hide">Content</span>
                <span class="tooltip__content">Content</span>
            </a>
            </li>
            <!--Tambah Neng kene-->
        </div>

        <div class="sidebar-links bottom-links">
        <h2>Settings</h2>
        <ul>
            <li>
            <a href="#settings" title="Settings" class="tooltip">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path
                    d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                </path>
                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                </svg>
                <span class="link hide">Settings</span>
                <span class="tooltip__content">Settings</span>
            </a>
            </li>
            <li>
            <a href="#notifications" title="Notifications" class="tooltip">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                </svg>
                <span class="link hide">Notifications</span>
                <span class="tooltip__content">Notifications</span>
            </a>
            </li>
        </ul>
        </div>
        <div class="divider"></div>
        <div class="sidebar__profile">
        <div class="avatar__wrapper">
            <img class="avatar" src="assets/profile.png" alt="Joe Doe Picture">
            <div class="online__status"></div>
        </div>
        <section class="avatar__name hide">
            <div class="user-name">Joe Doe</div>
            <div class="email">joe.doe@atheros.ai</div>
        </section>
        <a href="#logout" class="logout">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
            <path d="M9 12h12l-3 -3"></path>
            <path d="M18 15l3 -3"></path>
            </svg>
        </a>
        </div>
        </div>
    </nav>
    <script>
            const expand_btn = document.querySelector(".expand-btn");

            let activeIndex;

            expand_btn.addEventListener("click", () => {
            document.body.classList.toggle("collapsed");
            });

            const current = window.location.href;

            const allLinks = document.querySelectorAll(".sidebar-links a");

            allLinks.forEach((elem) => {
            elem.addEventListener("click", function () {
                const hrefLinkClick = elem.href;

                allLinks.forEach((link) => {
                if (link.href == hrefLinkClick) {
                    link.classList.add("active");
                } else {
                    link.classList.remove("active");
                }
                });
            });
            });

            const searchInput = document.querySelector(".search__wrapper input");

            searchInput.addEventListener("focus", (e) => {
            document.body.classList.remove("collapsed");
            });
    </script>

<!--Sidebar End-->