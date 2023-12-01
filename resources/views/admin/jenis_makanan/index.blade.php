@extends('themes.template')
@section('content')
@php
$ar_judul = ['No','Nama','Aksi'];
$no = 1;
@endphp
<div class="page-content" align="left">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>Kelola Jenis Makanan</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Kelola Jenis Makanan</li>
        </ol>
        <!-- konfirmasi utuk delete -->
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        @if($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
        @endif
        @yield('content')
        @include('themes.footer')
        <!-- ---------------------------------------- -->
        <a href="{{ route('admin.tambah-jenis-makanan') }}" class="btn btn-primary" title="Tambah Data" style="margin-bottom: 10px;">
            Tambah
        </a>
        <div class="card mb-4" style="width:50%">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <b>Data Jenis Makanan</b>
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
                        @foreach($ar_jmakanan as $jm)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $jm->nama_jenis }}</td>
                            <td>
                                <form method="POST" action="{{ route('jenis_makanan.destroy', $jm->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-info btn-sm" href="#" title="Detail Jenis Makanan">
                                        <i class="far fa-file-alt" style="width:16px;height:16px"></i>
                                    </a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('admin.edit-jenis-makanan') }}" title="Ubah Jenis Makanan">
                                        <i class="fas fa-pen" style="width:16px;height:16px"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus Jenis Makanan">
                                        <i class="fas fa-trash" style="width:16px;height:16px"></i>
                                    </button>
                                </form>

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