@extends('themes.template')
@section('content')
<div class="page-content" align="left">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>Edit User</h3>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('/kelola_users') }}">Kelola Users</a>
            </li>
            <li class="breadcrumb-item active">Edit User</li>
        </ol>

        <!-- main -->
        <div class="row justify-content">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Formulir Edit User</h4>
                    </div>
                    <div class="card-body mx-4">
                        <form method="POST" action="{{ route('edit_akun', $userakun->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="name" class="col-md-3 col-form-label"><b>{{ __('Nama') }}</b></label>
                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $userakun->username }}" required autocomplete="name" autofocus placeholder="Masukkan nama">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-md-3 col-form-label"><b>{{ __('Email') }}</b></label>
                                <div class="col-md-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $userakun->email }}" required autocomplete="email" placeholder="example@gmail.com" disabled>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="role" class="col-md-3 col-form-label"><b>{{ __('Role') }}</b></label>
                                <div class="col-md-9">
                                    <input id="role" type="text" class="form-control" name="role" required autocomplete="role" value="{{ $userakun->role }}" disabled>


                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Informasi tambahan sesuai dengan role -->
                            <div class="mb-3 row">
                                <label for="alamat" class="col-md-3 col-form-label"><b>{{ __('Alamat') }}</b></label>
                                <div class="col-md-9">
                                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $detail->alamat }}" required placeholder="Masukkan alamat">
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_hp" class="col-md-3 col-form-label"><b>{{ __('No HP') }}</b></label>
                                <div class="col-md-9">
                                    <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ $detail->no_hp }}" required placeholder="nomor handphone">
                                    @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="deskripsi" class="col-md-3 col-form-label"><b>{{ __('Deskripsi') }}</b></label>
                                <div class="col-md-9">
                                    <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required>{{ $detail ? $detail->deskripsi : old('deskripsi') }}</textarea>

                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="foto" class="col-md-3 col-form-label"><b>{{ __('Foto') }}</b></label>
                                <div class="col-md-9">
                                    @if($detail && $detail->foto)
                                    <div class="col-5">
                                        <img src="{{ asset($detail->foto) }}" alt="Foto saat ini" class="img-thumbnail me-2">
                                    </div>
                                    <br>
                                    @else
                                    <p>Foto belum ditambahkan</p>
                                    @endif
                                    <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                                </div>
                            </div>

                            <br>
                            <div class="text-center">
                                <div class="my-3">
                                    <button type="submit" class="btn btn-warning">
                                        {{ __('Edit') }}
                                    </button>
                                    <a href="{{ route('admin.kelola_users') }}" class="btn btn-secondary">
                                        {{ __('Kembali') }}

                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection