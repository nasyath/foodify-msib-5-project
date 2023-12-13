@extends('themes.template')
@section('content')
<div class="page-content">
    <div class="container-fluid" style="padding: 0px 50px 0px 50px;">
        <h3>Dashboard</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="#">Dashboard</a>
            </li>
        </ol>
        <div class="row">
            <div class="col-xxl-9">
                <div class="row">
                    <div class="col-xl-3 col-lg-6">
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
                                        <p class="text-muted mb-0">{{ $totalDonasi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
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
                                        <p class="text-muted mb-0">{{ $totalDiterima }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
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
                                        <p class="text-muted mb-0">{{ $totalDitolak }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-secondary bg-gradient">
                                                <i class="fas fa-user-clock" width="20" height="20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="font-size-15 mb-2">Donasi Pending</h5>
                                        <p class="text-muted mb-0">{{ $totalPending }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        @endsection