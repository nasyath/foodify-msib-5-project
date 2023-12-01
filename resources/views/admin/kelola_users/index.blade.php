@extends('themes.template')
@section('content')
@php
$ar_judul = ['No','Username','Email','Nama Organisasi','Aksi'];
$no = 1;
@endphp
<div class="page-content" align="left">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>Kelola User</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Kelola Users</li>
        </ol>
        <button type="button" class="btn btn-primary mb-2 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Tambah">
            Tambah
        </button>
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
                            <td>
                                <a class="btn btn-info btn-sm" href="#" title="Detail Jenis Makanan">
                                    <i class="far fa-file-alt" style="width:16px;height:16px"></i>
                                </a>

                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editData" title="Edit">
                                    <i class="fas fa-pen" style="width:16px;height:16px"></i>
                                </button>

                                <!-- Modal Tambah Data -->
                                <div class="modal fade" id="editData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editDataLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editDataLabel">Tambah Jenis Makanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                sdfghj
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus Jenis Makanan">
                                    <i class="fas fa-trash" style="width:16px;height:16px"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection