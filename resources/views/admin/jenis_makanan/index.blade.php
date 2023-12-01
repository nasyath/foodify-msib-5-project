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
        <!-- ---------------------------------------- -->
        <button type="button" class="btn btn-primary mb-2 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#tambahData" title="Tambah">
            Tambah
        </button>

        <!-- Modal Tambah Data -->
        <div class="modal fade" id="tambahData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahDataLabel">Tambah Jenis Makanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <label for="horizontal-firstname-input" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('nama') is-invalid @else is-valid @enderror" placeholder="Enter Nama Jenis Makanan" id="horizontal-firstname-input" name="nama" value="{{ old('nama') }}">
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
                                <form method="POST" action="{{ route('jenis_makanan.destroy', $jm->id) }}">
                                    @csrf
                                    @method('DELETE')
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