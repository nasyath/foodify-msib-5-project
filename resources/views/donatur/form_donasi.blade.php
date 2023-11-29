@extends('themes.template')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card" style="width: 92%; margin-left:50px">
                    <div class="card-header">
                        <h4 class="card-title">Form Donasi</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Nama Donatur</label>
                                <input type="text" class="form-control" placeholder="Nama" id="formrow-firstname-input">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Makanan</label>
                                <select id="formrow-inputMakanan" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Makanan</option>
                                    <option>Minuman</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="formrow-jumlah-input">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="formrow-keterangan-input">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="formrow-tanggal-mulai-input">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Tanggal Akhir</label>
                                <input type="date" class="form-control" id="formrow-tanggal-akhir-input">
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="formrow-Foto-input">
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