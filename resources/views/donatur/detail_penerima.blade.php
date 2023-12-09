@extends('themes.template')
@section('content')
<!-- ============================================================== -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="user-sidebar">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="user-profile-img">
                                <img src="{{ asset('backend/assets/images/pattern-bg.jpg') }}" class="profile-img profile-foreground-img rounded-top" style="height: 120px;" alt="">
                                <div class="overlay-content rounded-top"></div>
                            </div>
                            <!-- end user-profile-img -->
                            <div class="mt-n5 position-relative">
                                <div class="text-center">
                                    <!-- Tampilkan foto dari database -->
                                    <img src="{{ asset('backend/assets/images/users' . ($penerimaDonasi->foto ? $penerimaDonasi->foto : '/nofoto.png')) }}" alt="{{ $penerimaDonasi->nama }}" class="avatar-xl rounded-circle img-thumbnail">

                                    <div class="mt-3">
                                        <h5 class="mb-1">{{ $penerimaDonasi->nama_penerima }}</h5>
                                        <div>
                                            <a href="#" class="badge bg-success-subtle text-success m-1">Menerima Donasi</a>
                                        </div>
                                        <div class="mt-4">
                                            <a href="https://wa.me/{{ $penerimaDonasi->no_hp }}" target="_blank" class="btn btn-success waves-effect waves-light btn-sm">
                                                <i class="bx bx-send me-1 align-middle"></i> Kirim Pesan
                                            </a>
                                            <a href="{{ route('form_donasi', $penerimaDonasi->id) }}" class="btn btn-primary waves-effect waves-light btn-sm">
                                                <i class="bx bx-check-square me-1 align-middle"></i> Bantu
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail Informasi</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="font-size-15">Deskripsi :</h5>
                            <p class="font-size-15 mb-1">{{ $penerimaDonasi->deskripsi }}</p><br>
                            <h5 class="font-size-15">Detail Lain :</h5>
                            <ul class="list-unstyled mb-0 pt-1">
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>No Handphone : {{ $penerimaDonasi-> no_hp }}</li>
                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Alamat : {{ $penerimaDonasi-> alamat }}</li>
                            </ul>

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <div class="col-xxl-9">
                <!-- ... (tambahkan bagian konten sesuai kebutuhan) ... -->
            </div>
        </div>
    </div> <!-- container-fluid -->
</div>
<!-- end main content-->
@endsection