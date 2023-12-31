<header class="xs-header header-transparent xs-box fmkb-header">
    <div class="container">
        <nav class="xs-menus">
            <div class="xs-top-bar clearfix">
                <img class="fmkb-second-logo" src="{{ asset('frontend/wp-content/uploads/2018/10/foodify-full-logo.png') }}" alt="" width="135px" />
                <ul class="xs-top-social">
                    <li>
                        <a href="https://instagram.com/foodify_project?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://api.whatsapp.com/send?phone=6288806923500&text=halo,%20saya%20ingin%20donasi%20atau%20jadi%20relawan"><i class="fa fa-whatsapp"></i></a>
                    </li>
                </ul>
                <a href="mailto:foodify.project@gmail.com" class="xs-top-bar-mail"><i class="fa fa-envelope-o"></i>foodify.project@gmail.com</a>
            </div>
            <div class="nav-header">
                <div class="nav-toggle"></div>
                <a href="index.html" class="xs-nav-logo">
                    <img src="{{ asset('frontend/wp-content/uploads/2018/10/foodify-full-logo.png') }}" alt="" />
                </a>
            </div>
            <!-- .nav-header END -->
            <div class="nav-menus-wrapper row">
                <div class="xs-logo-wraper col-lg-2 col-xl-2 xs-padding-0">
                    <a class="nav-brand" href="index.html">
                        <img class="primary-logo" src="{{ asset('frontend/wp-content/uploads/2018/10/foodify-logo.png') }}" alt="" width="135px" />
                    </a>
                </div>
                <!-- .xs-logo-wraper END -->
                <div class="col-lg-10 col-xl-10">
                    <div class="menu-top-menu-container">
                        <ul id="menu-top-menu" class="nav-menu fmkb-menu">
                            <li id="menu-item-320" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-320">
                                <a href="{{ route('landingpage') }}" aria-current="page">Beranda</a>
                            </li>
                            <li id="menu-item-78" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78">
                                <a href="{{ route('tentang') }}">Tentang Kami</a>
                            </li>
                            <li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184">
                                <a href="{{ route('mitra') }}">Mitra</a>
                            </li>
                            @if (!auth()->check())
    <li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79">
        <a href="{{ route('register') }}">Register</a>
    </li>
    <li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="{{ route('login') }}">Login</a>
    </li>
@else
    @if (auth()->user()->role === 'Admin')
        <li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="{{ route('admin.dashboard') }}">Masuk Kembali</a>
        </li>
    @elseif (auth()->user()->role === 'Donatur')
        <li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="{{ route('donatur.dashboard') }}">Masuk Kembali</a>
        </li>
    @elseif (auth()->user()->role === 'Penerima')
        <li id="menu-item-194" class="menu-item menu-item-type-post_type menu-item-object-page">
            <a href="{{ route('penerima.dashboard') }}">Masuk Kembali</a>
        </li>
    @endif
@endif
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .nav-menus-wrapper .row END -->
        </nav>
        <!-- .xs-menus .fundpress-menu END -->
    </div>
    <!-- .container end -->
</header>