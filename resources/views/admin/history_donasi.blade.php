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
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <form method="POST" action="{{ route('kelola_jenis.destroy', $jm->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-warning btn-sm" href="{{ route('kelola_jenis.edit', $jm->id) }}" title="Ubah Jenis Makanan">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm show-alert-delete-box" title="Hapus Jenis Makanan">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <!--a class="btn btn-info btn-sm" href="#" title="Detail Jenis Makanan">
                                    <i class="far fa-file-alt" style="width:16px;height:16px"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection