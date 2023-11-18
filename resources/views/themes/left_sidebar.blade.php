<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="#" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/foodify-logo.png') }}" alt="" height="28">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/foodify-dark-logo.png') }}" alt="" height="56">
            </span>
        </a>

        <a href="#" class="logo logo-light">
        <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/foodify-logo.png') }}" alt="" height="28">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/foodify-light-logo.png') }}" alt="" height="56">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 header-item vertical-menu-btn topnav-hamburger">
        <span class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li class="@if (Route::currentRouteName() == 'dashboard') active @endif">
                    <a href="{{ route('dashboard') }}">
                        <i class="icon nav-icon" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.dashboard') }}" data-key="t-ecommerce">Admin</a></li>
                        <li><a href="{{ route('donatur.dashboard') }}" data-key="t-saas">Donatur</a></li>
                        <li><a href="{{ route('penerima.dashboard') }}" data-key="t-crypto">Penerima</a></li>
                    </ul>
                </li>

                <li class="@if (Route::currentRouteName() == 'eksplor') active @endif">
                    <a href="javascript: void(0);">
                        <i class="icon nav-icon" data-eva="people-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Donatur</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('eksplor') }}" data-key="t-ecommerce">Eksplor Penerima</a></li>
                        <li><a href="{{ route('form_donasi') }}" data-key="t-saas">Form Donasi</a></li>
                        <li><a href="{{ route('proses_donasi') }}" data-key="t-crypto">Proses Donasi</a></li>
                    </ul>
                </li>

                <li class="@if (Route::currentRouteName() == 'kelola_makanan') active @endif">
                    <a href="javascript: void(0);">
                        <i class="icon nav-icon" data-eva="people-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Admin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('kelola_makanan') }}" data-key="t-ecommerce">Kelola Jenis Makanan</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->

        <div class="p-3 px-4 sidebar-footer">
            <p class="mb-1 main-title">
                <script>
                    document.write(new Date().getFullYear())
                </script> &copy; Kelompok 3.
            </p>
            <p class="mb-0">Design & Develop by Kelompok 3 | MSIB 5 NF Computer</p>
        </div>
    </div>
</div>