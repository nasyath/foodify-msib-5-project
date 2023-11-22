@extends('themes.template')
@section('content')
<div class="page-content" align="left">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>Tambah Jenis Makanan</h3>
        <ol class="breadcrumb mb-4" style="font-size: 12px;">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('/kelola_jmakanan') }}">Kelola Jenis Makanan</a>
            </li>
            <li class="breadcrumb-item active">Edit Jenis Makanan</li>
        </ol>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form edit jenis makanan</h4>
                </div>
                <div class="card-body">

                    <form>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="id jenis makanan" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Enter Nama Jenis Makanan" id="horizontal-firstname-input">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-danger">Batal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
</div>
@endsection