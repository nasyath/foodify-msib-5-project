@extends('themes.template')
@section('content')
<div class="page-content" align="left">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>History Donasi</h3>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('/history_donasi') }}">History Donasi</a>
            </li>
            <li class="breadcrumb-item active">Detail History Donasi</li>
        </ol>

        <!-- main -->
        <div class="card" style="width: 80%;">
            <div class="row no-gutters align-items-center">
                <div class="col-md-4 centered-item">
                    <div class="card-body">
                        @empty($detail_history->foto)
                        <br /><img src="{{ asset('backend/assets/images/no_foto.jpg') }}" class="img-fluid rounded-start" />
                        @else
                        <!-- <img src="{{ asset('backend/assets/images/donasi') }}/{{ $detail_history->foto }}" /> -->
                        <img src="{{ asset($detail_history->foto) }}" alt="" class="img-thumbnail me-2">
                        @endempty
                    </div>
                </div>
                <div class="col-md-8 centered-item">
                    <div class="card-body">
                        <h2>Detail Donasi {{ $detail_history->id }} || 
                            @if ($detail_history->status === 'Diterima')
                            <span class="badge bg-success-subtle text-success  mb-0">Diterima</span>
                            @elseif ($detail_history->status === 'Ditolak')
                            <span class="badge bg-danger-subtle text-danger  mb-0">Ditolak</span>
                            @elseif ($detail_history->status === 'Pending')
                            <span class="badge bg-secondary-subtle text-secondary  mb-0">Pending</span>
                            @endif
                        </h2>
                        <hr>
                        <table class="table-responsive">
                            <tbody>
                                <tr>
                                    <th>Donatur</th>
                                    <td> : {{ $detail_history->nama_donatur }}</td>
                                </tr>
                                <tr>
                                    <th>Penerima</th>
                                    <td> : {{ $detail_history->nama_penerima }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Makanan</th>
                                    <td> : {{ $detail_history->nama_jenis }}</td>
                                </tr>
                                <tr>
                                    <th>Jumlah</th>
                                    <td> : {{ $detail_history->jumlah }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Mulai</th>
                                    <td> : {{ $detail_history->tgl_mulai }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Selesai</th>
                                    <td> : {{ $detail_history->tgl_akhir }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td> : {{ $detail_history->keterangan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection