<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Var Title | {{ env('APP_NAME')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <!-- data tables -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/startbootstrap/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>


<body data-sidebar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        {{-- Vertical Header Section --}}
        @include('themes.vertical_header')
        {{-- Vertical Header Section --}}

        {{-- Left Sidebar Section --}}
        @include('themes.left_sidebar')
        {{-- Left Sidebar Section --}}

        {{-- TopBar Horizontal Header Section --}}
        @include('themes.horizontal_header')
        {{-- TopBar Horizontal Header Section --}}

        {{-- MAIN CONTENT START HERE --}}
        <div class="main-content">
            @yield('content')
            @include('themes.footer')
        </div>

        {{-- MAIN CONTENT END HERE --}}

    </div>
    <!-- END layout-wrapper -->

    {{-- Right Sidebar Section --}}
    @include('themes.right_sidebar')
    {{-- Right Sidebar Section --}}


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- chat offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasActivityLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/eva-icons/eva.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/apexcharts-line.init.js') }}"></script>

    <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/dashboard-crypto.init.js') }}"></script>

    <!-- gridjs js -->
    <script src="{{ asset('backend/assets/libs/gridjs/gridjs.umd.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/gridjs.init.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- data tables || startbootstrap -->
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/assets/js/datatables-simple-demo.js') }}"></script>

</body>

</html>