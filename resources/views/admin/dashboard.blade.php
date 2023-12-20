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
                    <div class="col-xl-2 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-info bg-gradient">
                                                <i class="far fa-handshake"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Donasi</h5>
                                        <h3 class="text-muted mb-0">{{ $totalDonasi }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-primary bg-gradient">
                                                <i class="fas fa-spa"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Donatur</h5>
                                        <h3 class="text-muted mb-0">{{ $totalDonatur }}</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-warning bg-gradient">
                                                <i class="fas fa-leaf"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Penerima</h5>
                                        <h3 class="text-muted mb-0">{{ $totalPenerima }}</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-success bg-gradient">
                                                <i class="fas fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Diterima</h5>
                                        <h3 class="text-muted mb-0">{{ $totalDiterima }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-danger bg-gradient">
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Ditolak</h5>
                                        <h3 class="text-muted mb-0">{{ $totalDitolak }}</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-secondary bg-gradient">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Pending</h5>
                                        <h3 class="text-muted mb-0">{{ $totalPending }}</h3>
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

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5><b>Data Donasi</b></h5>
                        <hr>
                        <div>
                            <canvas id="myPieChart"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5><b>Data Users</b></h5>
                        <hr>
                        <div>
                            <canvas id="myBarChart" height="300px" width="272px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    // Data untuk Pie Chart (distribusi status donasi)
    var pieChartData = {
        labels: @json($pieChartData['labels']),
        datasets: [{
            label: 'Status Donasi',
            data: @json($pieChartData['data']),
            backgroundColor: @json($pieChartData['backgroundColor']),
            borderColor: @json($pieChartData['borderColor']),
            borderWidth: 1
        }]
    };

    // Data untuk Bar Chart (jumlah pengguna berdasarkan peran)
    var barChartData = {
        labels: @json($barChartData['labels']),
        datasets: [{
            label: 'Jumlah Pengguna',
            data: @json($barChartData['data']),
            backgroundColor: @json($barChartData['backgroundColor']),
            borderColor: @json($barChartData['borderColor']),
            borderWidth: 1
        }]
    };

    // Code untuk membuat chart dengan Chart.js
    var ctxPie = document.getElementById('myPieChart').getContext('2d');
    var ctxBar = document.getElementById('myBarChart').getContext('2d');

    var myPieChart = new Chart(ctxPie, {
        type: 'pie',
        data: pieChartData,
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    var myBarChart = new Chart(ctxBar, {
        type: 'bar',
        data: barChartData,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>

@endsection