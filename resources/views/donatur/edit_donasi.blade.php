@extends('themes.template')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card" style="width: 92%; margin-left:50px">
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Donasi</h4>
                    </div>
                    <div class="card-body">
                       <form method="POST" action="{{ route('update_donasi', ['id' => $donasi->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Tambahkan metode PUT untuk update -->

                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Nama Donatur</label>
                                <input type="text" class="form-control" placeholder="Nama" id="formrow-firstname-input" value="{{ $donatur->username }}" disabled>
                                <input type="hidden" name="id_penerima" value="{{ $donasi->penerima->id }}">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Nama Penerima</label>
                                <input type="text" class="form-control" placeholder="Nama" id="formrow-firstname-input" value="{{ $donasi->penerima->nama_penerima }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formrow-inputMakanan" class="form-label">Makanan</label>
                                <select name="id_makanan" id="formrow-inputMakanan" class="form-select">
                                    <option selected>Choose...</option>
                                    @foreach ($jenisMakananOptions as $id => $nama_jenis)
                                    <option value="{{ $id }}" @if($id==$donasi->id_makanan) selected @endif>{{ $nama_jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="formrow-jumlah-input" name="jumlah" value="{{ $donasi->jumlah }}">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="formrow-keterangan-input" name="keterangan" value="{{ $donasi->keterangan }}">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="formrow-tanggal-mulai-input" name="tanggal_mulai" value="{{ $donasi->tgl_mulai }}">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Tanggal Akhir</label>
                                <input type="date" class="form-control" id="formrow-tanggal-akhir-input" name="tanggal_akhir" value="{{ $donasi->tgl_akhir }}">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Foto</label>
                                <div class="row">
                                    <div class="col-4">
                                        @if($donasi->foto)
                                        <img src="{{ asset($donasi->foto) }}" alt="Donasi Foto" class="img-thumbnail me-2">
                                        <p class="text-muted">Foto saat ini</p>
                                        @else
                                        <span class="text-muted">Tidak ada foto</span>
                                        @endif
                                    </div>
                                </div>
                                <input type="file" class="form-control" id="formrow-Foto-input" name="foto">
                                <small id="fotoHelp" class="form-text text-muted">Unggah foto baru jika perlu.</small>
                            </div>



                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
    </div> <!-- container-fluid -->
</div>
<!-- end main content-->
@endsection