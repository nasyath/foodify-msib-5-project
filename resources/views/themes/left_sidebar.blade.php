<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/logo-dark-sm.png') }}" alt="" height="22">
            </span>
        </a>

        <a href="{{ route('dashboard') }}" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="22">
            </span>
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/logo-light-sm.png') }}" alt="" height="22">
                {{-- <h3 class="text-white fw-bold">SI DO MA</h3> --}}
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
                    <a href="javascript: void(0);">
                        <i class="icon nav-icon" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('dashboard') }}" data-key="t-ecommerce">Admin</a></li>
                        <li><a href="dashboard-saas.html" data-key="t-saas">Donatur</a></li>
                        <li><a href="dashboard-crypto.html" data-key="t-crypto">Penerima</a></li>
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