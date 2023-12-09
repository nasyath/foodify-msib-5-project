@extends('themes.template')
@section('content')
@php
$ar_judul = ['No','Donatur','Tanggal Mulai','Tanggal Akhir','Penerima','Status','Aksi'];
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
                            <td>{{ $hd->nama_penerima }}</td>
                            <td>{{ $hd->status }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="#" title="Detail Donasi">
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