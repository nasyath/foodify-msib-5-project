<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend/assets/images/foodify-logo.png') }}" alt="" height="28">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/assets/images/foodify-dark-logo.png') }}" alt="" height="56">
            </span>
        </a>

        <a href="{{ route('dashboard') }}" class="logo logo-light">
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

                <li class="@if (Route::currentRouteName() == '/') active @endif">
                    <a href="javascript: void(0);">
                        <i class="icon nav-icon" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Dashboards</span>
                        <span class="badge rounded-pill bg-primary">3</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="@if (Route::currentRouteName() == '/') active @endif"
                                data-key="t-ecommerce">Admin</a></li>
                        <li><a href="dashboard-saas.html" data-key="t-saas">Donatur</a></li>
                        <li><a href="dashboard-crypto.html" data-key="t-crypto">Penerima</a></li>
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
