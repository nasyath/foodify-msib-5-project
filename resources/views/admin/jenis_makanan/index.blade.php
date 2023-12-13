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
        <div>
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
        </div>

        <button type="button" class="btn btn-primary mb-2 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Tambah">
            Tambah
        </button>
        <!-- Modal Tambah Data -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropaLabel">Tambah Jenis Makanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" method="POST" action="{{ route('kelola_jenis_makanan.store') }}">
                            @csrf
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="horizontal-firstname-input" class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama_jenis">
                                </div>
                            </div>
                            <div align="center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ------------------------------------------------------------------------------------------ -->

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
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editData" title="Edit">
                                    <i class="fas fa-pen" style="width:16px;height:16px"></i>
                                </button>

                                <!-- Modal Edit Data -->
                                
                                <div class="modal fade" id="editData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editDataLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editDataLabel">Edit Jenis Makanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('kelola_jenis_makanan.update', $jm->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">

                                                    <!-- Form fields -->
                                                    <div class="row" align="left">
                                                        <div class="col">
                                                            <label for="horizontal-firstname-input" class="col-form-label">Nama</label>
                                                            <input type="text" class="form-control" name="nama_jenis" value="{{ $jm->nama_jenis }}">
                                                        </div>
                                                    </div>

                                                    <!-- Display validation errors -->
                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <!-- <td>
                                <form method="POST" action="{{ route('kelola_jenis_makanan.destroy', $jm->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus Jenis Makanan">
                                        <i class="fas fa-trash" style="width:16px;height:16px"></i>
                                    </button>
                                </form>

                            </td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection