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
                                            <div class="avatar-title rounded bg-success bg-gradient">
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
                                            <div class="avatar-title rounded bg-primary bg-gradient">
                                                <i class="fas fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Diterima</h5>
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
                                            <div class="avatar-title rounded bg-danger bg-gradient">
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Ditolak</h5>
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
                                            <div class="avatar-title rounded bg-secondary bg-gradient">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-2">Pending</h5>
                                        <h3 class="text-muted mb-0">{{ $totalDonatur }}</h3>
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
            <div class="col-md-5">
                <canvas id="donasiChart" width="100" height="100"></canvas>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line with Data Labels</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div id="line_chart_datalabel" data-colors='["#57c9eb","#f56e6e","yellow"]' class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    // Data untuk pie chart
    var donasiData = {
      labels: ['Diterima', 'Ditolak', 'Pending'],
      datasets: [{
        data: [40, 20, 30], // Ganti data dengan jumlah donasi yang sesuai
        backgroundColor: ['#36a2eb', '#ff6384', '#ffce56']
      }]
    };

    // Konfigurasi pie chart
    var donasiOptions = {
      responsive: true
    };

    // Inisialisasi pie chart
    var ctx = document.getElementById('donasiChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: donasiData,
      options: donasiOptions
    });
  </script>
@endsection