@extends('themes.template')
@section('content')
@php
$ar_judul = ['No','Nama Donatur','Nama Penerima','Jenis Makanan','Jumlah','Tanggal Mulai','Tanggal Akhir','Status','Aksi'];
$no = 1;
@endphp
<div class="page-content" align="left">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>Donasi</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Donasi</li>
        </ol>


        <!-- main -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <b>Proses Donasi</b>
                ({{ $donasiList->count() }})
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
                        <!-- Iterasi melalui data donasi dari controller -->
                        @foreach ($donasiList as $donasi)
                            @if ($donasi->status === 'Pending')
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $donasi->donatur->nama_donatur }}</td>
                                <td>{{ $donasi->penerima->nama_penerima }}</td>
                                <td>{{ $donasi->jmakanan->nama_jenis }}</td>
                                <td>{{ $donasi->jumlah }}</td>
                                <td>{{ $donasi->tgl_mulai }}</td>
                                <td>{{ $donasi->tgl_akhir }}</td>
                                <td>
                                    @if ($donasi->status === 'Diterima')
                                    <span class="badge bg-success-subtle text-success  mb-0">Diterima</span>
                                    @elseif ($donasi->status === 'Ditolak')
                                    <span class="badge bg-danger-subtle text-danger  mb-0">Ditolak</span>
                                    @elseif ($donasi->status === 'Pending')
                                    <span class="badge bg-secondary-subtle text-secondary  mb-0">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('detail_donasi_penerima', $donasi->id) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Donasi">
                                        <i class="far fa-file-alt" style="width:16px;height:16px"></i>
                                    </a>

                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection