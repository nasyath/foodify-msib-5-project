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

                @if( Auth::user()->role == 'Admin')
                <!-- Admin  -->
                <li class="@if (Route::currentRouteName() == 'dashboard') active @endif">
                    <a href="{{ route('admin.dashboard') }}" data-key="t-ecommerce">
                        <i class="icon nav-icon" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                <li class="@if (Route::currentRouteName() == 'kelola_jenis_makanan') active @endif">
                    <a href="{{ url('/kelola_jenis_makanan') }}" data-key="t-ecommerce">
                        <i class="fas fa-utensils" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-ecommerce">Jenis Makanan</span>
                    </a>
                </li>
                <li class="@if (Route::currentRouteName() == 'kelola_users') active @endif">
                    <a href="{{ url('/kelola_users') }}" data-key="t-ecommerce">
                        <i class="fas fa-users-cog" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-ecommerce">Kelola Users</span>
                    </a>
                </li>
                <li class="@if (Route::currentRouteName() == 'history_donasi') active @endif">
                    <a href="{{ url('/history_donasi') }}" data-key="t-ecommerce">
                        <i class="fas fa-folder-open" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-ecommerce">History Donasi</span>
                    </a>
                </li>
                @endif

                @if( Auth::user()->role == 'Donatur')
                <!-- Donatur  -->
                <li class="@if (Route::currentRouteName() == 'dashboard') active @endif">
                    <a href="{{ route('donatur.dashboard') }}" data-key="t-ecommerce">
                        <i class="icon nav-icon" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <li class="@if (Route::currentRouteName() == 'eksplor') active @endif">
                    <a href="javascript: void(0);">
                        <i class="icon nav-icon" data-eva="people-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Donatur</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('eksplorasi_penerima') }}" data-key="t-ecommerce">Eksplor Penerima</a></li>
                        <li><a href="{{ route('proses_donasi') }}" data-key="t-crypto">Proses Donasi</a></li>
                    </ul>
                </li>
                @endif

                <!-- Penerima  -->
                @if( Auth::user()->role == 'Penerima')
                <li class="@if (Route::currentRouteName() == 'dashboard') active @endif">
                    <a href="{{ route('penerima.dashboard') }}" data-key="t-ecommerce">
                        <i class="icon nav-icon" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                <li class="@if (Route::currentRouteName() == 'history_donasi') active @endif">
                    <a href="{{ url('/history_donasi') }}" data-key="t-ecommerce">
                        <i class="fas fa-folder-open" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-ecommerce">History Donasi</span>
                    </a>
                </li>
                <li class="@if (Route::currentRouteName() == 'eksplor') active @endif">
                    <a href="javascript: void(0);">
                        <i class="icon nav-icon" data-eva="people-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Penerima</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-ecommerce">Profile Organisasi</a></li>
                        <li><a href="{{ route('proses_donasi_penerima') }}" data-key="t-crypto">Donasi</a></li>
                        <li><a href="#" data-key="t-crypto">History</a></li>
                    </ul>
                </li>
                @endif
                @if( Auth::user()->role == 'Admin')
                <li class="@if (Route::currentRouteName() == 'kelola_user') active @endif">
                    <a href="#" data-key="t-ecommerce">
                        <i class="fas fa-users-cog" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-ecommerce">Kelola Users</span>
                    </a>
                </li>

                <li class="@if (Route::currentRouteName() == 'history_donasi') active @endif">
                    <a href="#" data-key="t-ecommerce">
                        <i class="fas fa-folder-open" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-ecommerce">History Donasi</span>
                    </a>
                </li>
                @endif
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