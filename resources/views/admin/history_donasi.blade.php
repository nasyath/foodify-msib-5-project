@extends('themes.template')
@section('content')
@php
$ar_judul = ['No','Donatur','Tanggal Mulai','Tanggal Akhir','Jenis Makanan','Penerima','Status','Aksi'];
$no = 1;
@endphp
<div class="page-content" align="left">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>History Donasi</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">History Donasi</li>
        </ol>

        <!-- main -->
        <a class="btn btn-danger m-2" href="{{ url('/admin-history-pdf') }}" title="Ekspor PDF">
            <i class="far fa-file-pdf" style="width:20px;height:20px"></i>
        </a>
        <a class="btn btn-success m-2" href="{{ url('/admin-history-excel') }}" title="Ekspor Excel">
            <i class="far fa-file-excel" style="width:20px;height:20px"></i>
        </a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <b>Data Users</b>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            @foreach($ar_judul as $jdl)
                            <th>{{ $jdl }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ar_history as $hd)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $hd->nama_donatur }}</td>
                            <td>{{ $hd->tgl_mulai }}</td>
                            <td>{{ $hd->tgl_akhir }}</td>
                            <td>{{ $hd->nama_jenis }}</td>
                            <td>{{ $hd->nama_penerima }}</td>
                            <td>
                                @if($hd->status === 'Pending')
                                <button type="button" class="btn btn-secondary" style="padding:0px; width: 60px; height:25px; font-size:11px">Pending</button>
                                @elseif($hd->status === 'Diterima')
                                <button type="button" class="btn btn-success" style="padding:0px; width: 60px; height:25px; font-size:11px">Diterima</button>
                                @elseif($hd->status === 'Ditolak')
                                <button type="button" class="btn btn-danger" style="padding:0px; width: 60px; height:25px; font-size:11px">Ditolak</button>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('history_donasi.show', ['id' => $hd->id]) }}" title="Detail Donasi">
                                    <i class="far fa-file-alt" style="width:16px;height:16px"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection