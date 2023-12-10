@extends('themes.template')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xxl-12">
                    <div class="user-sidebar">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="user-profile-img">
                                    <img src="{{ asset('backend/assets/images/small/img-6.jpg') }}"
                                        class="profile-img profile-foreground-img rounded-top" style="height: 120px;"
                                        alt="">
                                    <div class="overlay-content rounded-top">
                                        <div>
                                            <div class="user-nav p-3">
                                                <div class="d-flex justify-content-end">
                                                <!-- <a href="#" class="btn text-light btn-sm">
                                                <i class="bx bx-pencil me-1 align-middle"></i> Edit Profil</a> -->
                                                <div class="btn-group btn-group-example mb-0" role="group">
                                                    <button type="button" class="btn btn-light w-xs">Open</button>
                                                    <button type="button" class="btn btn-light w-xs">Close</i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end user-profile-img -->

                                <div class="mt-n5 position-relative">
                                    <div class="text-center">
                                    @if ($userinfo->role === 'Admin')
                                    <img src="{{ asset('backend/assets/images/users/nofoto.png') }}" alt=""
                                    class="avatar-xl rounded-circle img-thumbnail">
                                    @elseif ($userinfo->role === 'Penerima' && $userProfile->penerima->foto)
                                    <img src="{{ asset($userProfile->penerima->foto) }}" alt="{{ $userProfile->penerima->nama }}"
                                    class="avatar-xl rounded-circle img-thumbnail">
                                    @elseif ($userinfo->role === 'Donatur' && $userProfile->donatur->foto)
                                    <img src="{{ asset($userProfile->donatur->foto) }}" alt="{{ $userProfile->donatur->nama }}"
                                    class="avatar-xl rounded-circle img-thumbnail">
                                    @else
                                    <img src="{{ asset('backend/assets/images/users/nofoto.png') }}" alt="Default Image"
                                    class="avatar-xl rounded-circle img-thumbnail">
                                    @endif

                                        <div class="mt-3">
                                            <h5 class="mb-1">{{ $userinfo->username }}</h5>
                                            <div>
                                                <a href="#" class="badge bg-primary-subtle text-primary m-1">STATUSNYA PENERIMA</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- ini khusus Penerima -->
                                
                                <!-- <div class="p-3 mt-3">
                                    <div class="row text-center">
                                        <div class="col-6 border-end">
                                            <div class="p-1">
                                                <h5 class="mb-1">1050</h5>
                                                <p class="text-muted mb-0">Total Donasi</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1">
                                                <i class="mdi mdi-account font-size-24"></i><br>
                                                <p class="badge bg-primary-subtle text-primary mb-0">{{ $userinfo->role }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <br>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                            <br><div class="card">
                            @if ($userinfo->role === 'Penerima')
                            <div class="card-header bg-light">
                                <h4 class="card-title">Personal Information</h4><hr>
                            </div>
                            @endif
                            @if ($userinfo->role === 'Donatur')
                            <div class="card-header bg-light">
                                <h4 class="card-title">Personal Information</h4><hr>
                            </div>
                            @endif
                            <div class="card-body">
                                @if ($userinfo->role === 'Penerima')
                                <p class="font-size-15 mb-4" style="text-align : justify">
                                {{ $userProfile->Penerima->deskripsi }}
                                </p>
                                @endif

                                @if ($userinfo->role === 'Donatur')
                                <p class="font-size-15 mb-4" style="text-align : justify">
                                {{ $userProfile->Donatur->deskripsi }}
                                </p>
                                @endif
                                

                            </div><!-- end card body -->
                    </div>

                    <div class="card">
                            <div class="card-header bg-light">
                                <h4 class="card-title">Contact Information</h4><hr>
                            </div>
                            <div class="card-body">
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
                                

                            </div><!-- end card body -->
                    </div>
                </div>
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@endsection