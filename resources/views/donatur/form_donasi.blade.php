@extends('themes.template')
@section('content')
<div class="page-content">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>Form Donasi</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('penerima.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('proses_donasi') }}">Proses Donasi</a>
            </li>
            <li class="breadcrumb-item active">Form Donasi</li>
        </ol>
        <div class="row">
            <div class="col-xl-12">
                <div class="card" style="width: 92%; margin-left:50px">
                    <div class="card-header">
                        <h4 class="card-title">Form Donasi</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('submit_donasi') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Nama Donatur</label>
                                <input type="text" class="form-control" placeholder="Nama" id="formrow-firstname-input" value="{{ $donatur->username }}" disabled>
                                <input type="text" class="form-control" placeholder="Id Donatur" id="formrow-id-donatur-input" value="{{ Auth::user()->donatur->id }}" hidden>
                                <input type="hidden" class="form-control" placeholder="Id Penerima" name="id_penerima" id="formrow-id-penerima-input" value="{{ $penerimaDonasi->id }}">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Nama Penerima</label>
                                <input type="text" class="form-control" placeholder="Nama" id="formrow-firstname-input" value="{{ $penerimaDonasi->nama_penerima }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formrow-inputMakanan" class="form-label">Makanan</label>
                                <select name="id_makanan" id="formrow-inputMakanan" class="form-select">
                                    <option selected>Choose...</option>
                                    @foreach ($jenisMakananOptions as $id => $nama_jenis)
                                    <option value="{{ $id }}">{{ $nama_jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="formrow-jumlah-input" name="jumlah">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="formrow-keterangan-input" name="keterangan">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="formrow-tanggal-mulai-input" name="tanggal_mulai">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Tanggal Akhir</label>
                                <input type="date" class="form-control" id="formrow-tanggal-akhir-input" name="tanggal_akhir">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="formrow-Foto-input" name="foto">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <!-- end col -->
        </div>

    </div> <!-- container-fluid -->
</div>
<!-- end main content-->
@endsection