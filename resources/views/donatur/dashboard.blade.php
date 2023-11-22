@extends('themes.template')
@section('content')
<div class="page-content">
    <div class="container-fluid" style="padding: 0px 50px 0px 50px;">
        <div class="row">
            <div class="col-xxl-9">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-primary bg-gradient">
                                            <i data-eva="pie-chart-2" class="fill-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Total Donasi</h5>
                                        <p class="text-muted mb-0">26.5049</p>
                                    </div>
                                    <div class="flex-shrink-0 float-end">
                                        <div id="chart-sparkline1" data-colors='["#63ad6f"]'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-success bg-gradient">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Donasi Diterima</h5>
                                        <p class="text-muted mb-0">9,562.00</p>
                                    </div>
                                    <div class="flex-shrink-0 float-end">
                                        <div id="chart-sparkline3" data-colors='["#63ad6f"]'></div>
                                    </div>                                    
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-danger bg-gradient">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="font-size-15 mb-2">Donasi Ditolak</h5>
                                        <p class="text-muted mb-0">209.11</p>
                                    </div>
                                    <div class="flex-shrink-0 float-end">
                                        <div id="chart-sparkline2" data-colors='["#f56e6e"]'></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-3">User Activity</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Weekly<i class="mdi mdi-chevron-down ms-1"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <p class="text-muted mb-1">This Month</p>
                                    <h4>16,543</h4>
                                </div>

                                <div class="m-n3">
                                    <div id="chart-area" data-colors='["#3b76e1", "#f56e6e"]' class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-3">Order Stats</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-eva="more-horizontal-outline" class="fill-muted" data-eva-height="18" data-eva-width="18"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="chart-donut" data-colors='["#3b76e1", "#f1f3f7", "#f56e6e"]' class="mt-2"></div>

                                <div class="text-center mt-4 border-top">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="pt-3">
                                                <p class="text-muted text-truncate mb-2">Completed</p>
                                                <h5 class="font-size-16 mb-0">70</h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="pt-3">
                                                <p class="text-muted text-truncate mb-2">Pending</p>
                                                <h5 class="font-size-16 mb-0">25</h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="pt-3">
                                                <p class="text-muted text-truncate mb-2">Cancel</p>
                                                <h5 class="font-size-16 mb-0">19</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-3">Top Product</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Monthly<i class="mdi mdi-chevron-down ms-1"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-n4" data-simplebar style="max-height: 296px;">
                                    <ul class="list-unstyled mb-0">
                                        <li class="py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-primary bg-gradient rounded">
                                                            #1
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-muted mb-1 text-truncate">Polo blue T-shirt
                                                    </p>
                                                    <div class="fw-semibold font-size-15">$ 25.4</div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                        3.82k</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-primary bg-gradient rounded">
                                                            #2
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-muted mb-1 text-truncate">Hoodie for men</p>
                                                    <div class="fw-semibold font-size-15">$ 24.5</div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                        3.14k</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-primary bg-gradient rounded">
                                                            #3
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-muted mb-1 text-truncate">Red color Cap</p>
                                                    <div class="fw-semibold font-size-15">$ 22.5</div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                        2.84k</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-primary bg-gradient rounded">
                                                            #4
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-muted mb-1 text-truncate">Pocket T-shirt</p>
                                                    <div class="fw-semibold font-size-15">$ 21.5</div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h5 class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                        2.06k</h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end col -->
            <div class="col-xxl-3">

                <div class="user-sidebar">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="user-profile-img">
                                <img src="assets/images/pattern-bg.jpg" class="profile-img profile-foreground-img rounded-top" style="height: 120px;" alt="">
                                <div class="overlay-content rounded-top">
                                    <div>
                                        <div class="user-nav p-3">
                                            <div class="d-flex justify-content-end">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i data-eva="more-horizontal-outline" data-eva-width="20" data-eva-height="20" class="fill-white"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else
                                                                here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end user-profile-img -->

                            <div class="mt-n5 position-relative">
                                <div class="text-center">
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xl rounded-circle img-thumbnail">

                                    <div class="mt-3">
                                        <h5 class="mb-1">Jennifer Bennett</h5>
                                        <p class="text-muted">Product Designer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-3">
                                <div class="row text-center pb-3">
                                    <div class="col-6 border-end">
                                        <div class="p-1">
                                            <h5 class="mb-1">1,269</h5>
                                            <p class="text-muted mb-0">Products</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-1">
                                            <h5 class="mb-1">5.2k</h5>
                                            <p class="text-muted mb-0">Followers</p>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-4">


                                <div class="mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-3">Earning</h5>
                                        </div>
                                        <div>
                                            <button class="btn btn-link py-0 shadow-none" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title="Info">
                                                <i data-eva="info-outline" class="fill-muted" data-eva-height="20" data-eva-width="20"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div id="chart-radialBar" class="apex-charts" data-colors='["#3b76e1"]'></div>

                                    <div class="text-center mt-4">
                                        <h4>$26,256</h4>
                                        <p class="text-muted">Earning this Month</p>
                                        <div class="d-flex align-items-start justify-content-center gap-2">
                                            <div class="badge rounded-pill font-size-13 bg-success-subtle text-success ">+ 2.65%
                                            </div>
                                            <div class="text-muted text-start text-truncate">From previous period</div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mb-4">
                                <div class="px-4 mx-n3" data-simplebar style="height: 258px;">

                                    <div>
                                        <h5 class="card-title mb-3">Recent Activity</h5>

                                        <ul class="list-unstyled mb-0">
                                            <li class="py-2">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                            <div class="text-center">
                                                                <h5 class="mb-0">12</h5>
                                                                <div>Sep</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 pt-2 text-muted">
                                                        <p class="mb-0">Responded to need “Volunteer Activities"</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="py-2">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                            <div class="text-center">
                                                                <h5 class="mb-0">11</h5>
                                                                <div>Sep</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 pt-2 text-muted">
                                                        <p class="mb-0">Everyone realizes would be desirable... <a href="javascript: void(0);">Read more</a></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-2">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                            <div class="text-center">
                                                                <h5 class="mb-0">10</h5>
                                                                <div>Sep</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 pt-2 text-muted">
                                                        <p class="mb-0">
                                                            Joined the group “Boardsmanship Forum”</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pt-2">
                                                <a href="#" class="btn btn-link w-100 shadow-none"><i class="mdi mdi-loading mdi-spin me-2"></i> Load More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-3">Ratings & Reviews</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-eva="more-horizontal-outline" class="fill-muted" data-eva-height="18" data-eva-width="18"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Today</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-4 gx-0">
                            <div class="col-lg-6">
                                <div>
                                    <div class="text-center">
                                        <h1>4.3</h1>
                                        <div class="font-size-16 mb-1">
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star-half-full text-warning"></i>
                                        </div>
                                        <div class="text-muted">(14,254 Based)</div>
                                    </div>

                                    <div class="mt-4">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="p-1 py-2">
                                                    <h5 class="font-size-16 mb-0">5 <i class="mdi mdi-star"></i></h5>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1 py-2">
                                                    <div class="progress animated-progess custom-progress">
                                                        <div class="progress-bar bg-gradient bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1 py-2">
                                                    <h5 class="font-size-16 mb-0">50%</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="p-1 py-2">
                                                    <h5 class="font-size-16 mb-0">4 <i class="mdi mdi-star"></i></h5>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1 py-2">
                                                    <div class="progress animated-progess custom-progress">
                                                        <div class="progress-bar bg-gradient bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1 py-2">
                                                    <h5 class="font-size-16 mb-0">20%</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="p-1 py-2">
                                                    <h5 class="font-size-16 mb-0">3 <i class="mdi mdi-star"></i></h5>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1 py-2">
                                                    <div class="progress animated-progess custom-progress">
                                                        <div class="progress-bar bg-gradient bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1 py-2">
                                                    <h5 class="font-size-16 mb-0">15%</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="p-1 py-2">
                                                    <h5 class="font-size-16 mb-0">2 <i class="mdi mdi-star"></i></h5>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1 py-2">
                                                    <div class="progress animated-progess custom-progress">
                                                        <div class="progress-bar bg-gradient bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="p-1 py-2">
                                                    <h5 class="font-size-16 mb-0">10%</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="p-1 py-2">
                                                    <h5 class="font-size-16 mb-0">1 <i class="mdi mdi-star"></i></h5>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1 py-2">
                                                    <div class="progress animated-progess custom-progress">
                                                        <div class="progress-bar bg-gradient bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="20">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1 py-2">
                                                    <h5 class="font-size-16 mb-0">5%</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="ps-lg-4">
                                    <div class="d-flex flex-wrap align-items-start gap-3">
                                        <h5 class="font-size-15">Reviews: </h5>
                                        <p class="text-muted">(14,254 Based)</p>
                                    </div>

                                    <div class=" me-lg-n3 pe-lg-3" data-simplebar style="max-height: 266px;">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div>
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-grow-1">
                                                            <div class="badge bg-success bg-gradient mb-2"><i class="mdi mdi-star"></i> 4.1</div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="text-muted font-size-13">12 Jul, 21</p>
                                                        </div>
                                                    </div>

                                                    <p class="text-muted mb-4">It will be as simple as in fact, It will seem like simplified</p>
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14 mb-0">Samuel</h5>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="hstack gap-3">
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Like">
                                                                    <a href="#" class="text-muted"><i class="mdi mdi-thumb-up-outline"></i></a>
                                                                </div>
                                                                <div class="vr"></div>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Comment">
                                                                    <a href="#" class="text-muted"><i class="mdi mdi-comment-text-outline"></i></a>
                                                                </div>
                                                                <div class="vr"></div>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div>
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-grow-1">
                                                            <div class="badge bg-success bg-gradient mb-2"><i class="mdi mdi-star"></i> 4.0</div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="text-muted font-size-13">06 Jul, 21</p>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted mb-4">Sed ut perspiciatis iste error sit</p>
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14 mb-0">Joseph</h5>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="hstack gap-3">
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Like">
                                                                    <a href="#" class="text-muted"><i class="mdi mdi-thumb-up-outline"></i></a>
                                                                </div>
                                                                <div class="vr"></div>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Comment">
                                                                    <a href="#" class="text-muted"><i class="mdi mdi-comment-text-outline"></i></a>
                                                                </div>
                                                                <div class="vr"></div>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div>
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-grow-1">
                                                            <div class="badge bg-success bg-gradient mb-2"><i class="mdi mdi-star"></i> 4.2</div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="text-muted font-size-13">26 Jun, 21</p>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted mb-4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14 mb-0">Paul</h5>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="hstack gap-3">
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Like">
                                                                    <a href="#" class="text-muted"><i class="mdi mdi-thumb-up-outline"></i></a>
                                                                </div>
                                                                <div class="vr"></div>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Comment">
                                                                    <a href="#" class="text-muted"><i class="mdi mdi-comment-text-outline"></i></a>
                                                                </div>
                                                                <div class="vr"></div>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div>
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-grow-1">
                                                            <div class="badge bg-success bg-gradient mb-2"><i class="mdi mdi-star"></i> 4.1</div>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="text-muted font-size-13">24 Jun, 21</p>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted mb-4">Ut enim ad minima veniam, quis nostrum ullam corporis suscipit consequatur nisi ut</p>
                                                    <div class="d-flex align-items-start">
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14 mb-0">Patrick</h5>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="hstack gap-3">
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Like">
                                                                    <a href="#" class="text-muted"><i class="mdi mdi-thumb-up-outline"></i></a>
                                                                </div>
                                                                <div class="vr"></div>
                                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Comment">
                                                                    <a href="#" class="text-muted"><i class="mdi mdi-comment-text-outline"></i></a>
                                                                </div>
                                                                <div class="vr"></div>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-3">Transaction</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold">Report By:</span> <span class="text-muted">Monthly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Today</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="align-middle">Order ID</th>
                                        <th class="align-middle">Billing Name</th>
                                        <th class="align-middle">Date</th>
                                        <th class="align-middle">Total</th>
                                        <th class="align-middle">Pay Status</th>
                                        <th class="align-middle">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body fw-semibold">#BR2150</a> </td>
                                        <td>Smith</td>
                                        <td>
                                            07 Oct, 2021
                                        </td>
                                        <td>
                                            $24.05
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success-subtle text-success  font-size-11">Paid</span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-primary bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <i data-eva="eye" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                                <button type="button" class="btn btn-success bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <i data-eva="edit" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i data-eva="trash-2" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body fw-semibold">#BR2149</a> </td>
                                        <td>James</td>
                                        <td>
                                            07 Oct, 2021
                                        </td>
                                        <td>
                                            $26.15
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success-subtle text-success  font-size-11">Paid</span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-primary bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <i data-eva="eye" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                                <button type="button" class="btn btn-success bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <i data-eva="edit" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i data-eva="trash-2" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body fw-semibold">#BR2148</a> </td>
                                        <td>Jill</td>
                                        <td>
                                            06 Oct, 2021
                                        </td>
                                        <td>
                                            $21.25
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-pill  bg-warning-subtle  text-warning  font-size-11">Refund</span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-primary bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <i data-eva="eye" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                                <button type="button" class="btn btn-success bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <i data-eva="edit" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i data-eva="trash-2" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body fw-semibold">#BR2147</a> </td>
                                        <td>Kyle</td>
                                        <td>
                                            05 Oct, 2021
                                        </td>
                                        <td>
                                            $25.03
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success-subtle text-success  font-size-11">Paid</span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-primary bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <i data-eva="eye" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                                <button type="button" class="btn btn-success bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <i data-eva="edit" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i data-eva="trash-2" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><a href="javascript: void(0);" class="text-body fw-semibold">#BR2146</a> </td>
                                        <td>Robert</td>
                                        <td>
                                            05 Oct, 2021
                                        </td>
                                        <td>
                                            $22.61
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success-subtle text-success  font-size-11">Paid</span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-primary bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <i data-eva="eye" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                                <button type="button" class="btn btn-success bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <i data-eva="edit" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger bg-gradient btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i data-eva="trash-2" data-eva-height="14" data-eva-width="14" class="fill-white align-text-top"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- end table responsive -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
@endsection