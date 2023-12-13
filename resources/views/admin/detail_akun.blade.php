@extends('themes.template')
@section('content')

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
                            <div class="mt-n5 position-relative">
                                <div class="text-center">
                                <img src="{{ asset($userakun->role === 'Admin' ? 'backend/assets/images/users/nofoto.png' : ($userakun->role === 'Penerima' && $userakun->Penerima && $userakun->Penerima->foto ? $userakun->Penerima->foto : ($userakun->role === 'Donatur' && $userakun->Donatur && $userakun->Donatur->foto ? $userakun->Donatur->foto : 'backend/assets/images/users/nofoto.png'))) }}" alt="" class="avatar-xl rounded-circle img-thumbnail">

                                    <div class="mt-3">
                                        <h5 class="mb-1">{{ $userakun->username }}</h5>
                                        <div>
                                            @if ($userakun->role === 'Penerima')
                                            <a href="#" class="badge bg-success-subtle text-success m-1">PENERIMA</a>
                                            @endif

                                            @if ($userakun->role === 'Donatur')
                                            <a href="#" class="badge bg-primary-subtle text-primary m-1">DONATUR</a>
                                            @endif
                                        </div> <br>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="card-title">Detail Informasi</h4>
                            <hr><br>
                        </div>
                        <div class="card-body">
                            <p class="mt-n5"><strong>Deskripsi : </strong></p>
                            @if ($userakun->role === 'Penerima')
                            <p class="font-size-15 mb-4" style="text-align: justify">
                                {{ $userakun->Penerima->deskripsi }}
                            </p>
                            @endif

                            @if ($userakun->role === 'Donatur')
                            <p class="font-size-15 mb-4" style="text-align: justify">
                                {{ $userakun->Donatur->deskripsi }}
                            </p>
                            @endif
                            <p><strong>Detail Lain : </strong></p>

                            @if ($userakun->role === 'Penerima')
                            <p class="text"><i class="mdi mdi-phone-outline"></i> {{ $userakun->Penerima->no_hp }}</p>
                            @endif

                            @if ($userakun->role === 'Donatur')
                            <p class="text"><i class="mdi mdi-phone-outline"></i> {{ $userakun->Donatur->no_hp }}</p>
                            @endif

                            <p class="text"><i class="mdi mdi-email-outline"></i> {{ $userakun->email }}</p>
                            @if ($userakun->role === 'Penerima')
                            <p class="text"><i class="mdi mdi-google-maps"></i> {{ $userakun->Penerima->alamat }}</p>
                            @endif

                            @if ($userakun->role === 'Donatur')
                            <p class="text"><i class="mdi mdi-google-maps"></i> {{ $userakun->Donatur->alamat }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page-content -->

@endsection
