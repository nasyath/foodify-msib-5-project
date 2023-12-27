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
                                <img src="{{ asset('backend/assets/images/bg.jpg') }}" class="profile-img profile-foreground-img rounded-top" style="height: 220px;" alt="">
                                <div class="overlay-content rounded-top"></div>

                            </div>
                            <div class="mt-n5 position-relative">
                                <div class="text-center">
                                    @if ($userinfo->role === 'Admin')
                                    <img src="{{ asset('backend/assets/images/users/nofoto.png') }}" alt="" class="avatar-xl rounded-circle img-thumbnail">
                                    @elseif ($userinfo->role === 'Penerima' && $userProfile->penerima->foto)
                                    <img src="{{ asset($userProfile->penerima->foto) }}" alt="{{ $userProfile->penerima->nama }}" class="avatar-xl rounded-circle img-thumbnail">
                                    @elseif ($userinfo->role === 'Donatur' && $userProfile->donatur->foto)
                                    <img src="{{ asset($userProfile->donatur->foto) }}" alt="{{ $userProfile->donatur->nama }}" class="avatar-xl rounded-circle img-thumbnail">
                                    @else
                                    <img src="{{ asset('backend/assets/images/users/nofoto.png') }}" alt="Default Image" class="avatar-xl rounded-circle img-thumbnail">
                                    @endif

                                    <div class="mt-3">
                                        <h5 class="mb-1">{{ $userinfo->username }}</h5>
                                        <div>
                                            @if ($userinfo->role === 'Penerima')
                                            <a href="#" class="badge bg-success-subtle text-success m-1">PENERIMA</a>
                                            @endif

                                            @if ($userinfo->role === 'Donatur')
                                            <a href="#" class="badge bg-primary-subtle text-primary m-1">DONATUR</a>
                                            @endif
                                        </div> <br>
                                        @if ($userinfo->role === 'Penerima')
                                        @php
                                        $isOpen = $userProfile->Penerima->status === 'Open';
                                        @endphp
                                        <hr>
                                        <h6 class="mt-4"><strong>Action</strong></h6>
                                        <div class="btn-group btn-group-example mb-2" role="group">
                                            <a href="{{ route('open.status') }}" class="btn {{ $isOpen ? 'btn-success' : 'btn-light' }}">Open</a>
                                            <a href="{{ route('close.status') }}" class="btn {{ $isOpen ? 'btn-light' : 'btn-danger' }}">Close</a>
                                        </div>
                                        <div>
                                            @if ($isOpen)
                                            <a href="#" class="badge bg-success-subtle text-success m-1">Menerima Donasi</a>
                                            @else
                                            <a href="#" class="badge bg-danger-subtle text-danger m-1">Tidak Menerima Donasi</a>
                                            @endif
                                        </div>
                                        @endif

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
                            @if ($userinfo->role === 'Penerima')
                            <p class="font-size-15 mb-4" style="text-align: justify">
                                {{ $userProfile->Penerima->deskripsi }}
                            </p>
                            @endif

                            @if ($userinfo->role === 'Donatur')
                            <p class="font-size-15 mb-4" style="text-align: justify">
                                {{ $userProfile->Donatur->deskripsi }}
                            </p>
                            @endif
                            <p><strong>Detail Lain : </strong></p>

                            @if ($userinfo->role === 'Penerima')
                            <p class="text"><i class="mdi mdi-phone-outline"></i> {{ $userProfile->Penerima->no_hp }}</p>
                            @endif

                            @if ($userinfo->role === 'Donatur')
                            <p class="text"><i class="mdi mdi-phone-outline"></i> {{ $userProfile->Donatur->no_hp }}</p>
                            @endif

                            <p class="text"><i class="mdi mdi-email-outline"></i> {{ $userinfo->email }}</p>
                            @if ($userinfo->role === 'Penerima')
                            <p class="text"><i class="mdi mdi-google-maps"></i> {{ $userProfile->Penerima->alamat }}</p>
                            @endif

                            @if ($userinfo->role === 'Donatur')
                            <p class="text"><i class="mdi mdi-google-maps"></i> {{ $userProfile->Donatur->alamat }}</p>
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