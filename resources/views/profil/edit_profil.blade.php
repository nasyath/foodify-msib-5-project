@extends('themes.template')
@section('content')
<div class="page-content" align="left">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>Edit User</h3> <br>

        <!-- main -->
        <div class="row justify-content">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Formulir Edit User</h4>
                    </div>
                    <div class="card-body mx-4">
                    <form method="POST" action="{{ route('profil.edit_profil') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="name" class="col-md-3 col-form-label"><b>{{ __('Nama') }}</b></label>
                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $userakun->username }}"   autocomplete="name" autofocus placeholder="Masukkan nama">
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
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $userakun->email }}"   autocomplete="email" placeholder="example@gmail.com" disabled>
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
                                    <input id="role" type="text" class="form-control" name="role"   autocomplete="role" value="{{ $userakun->role }}" disabled>


                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Form password -->
                            <div class="mb-3 row">
                                <label for="password" class="col-md-3 col-form-label"><b>{{ __('Password') }}</b></label>
                                <div class="col-md-9">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"   autocomplete="new-password" autofocus placeholder="Masukkan password baru">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Form konfirmasi password -->
                            <div class="mb-3 row">
                                <label for="password-confirm" class="col-md-3 col-form-label"><b>{{ __('Konfirmasi Password') }}</b></label>
                                <div class="col-md-9">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Konfirmasi password baru">
                                </div>
                            </div>

                            <!-- Informasi tambahan sesuai dengan role -->
                            @if($userakun->role === 'Donatur' || $userakun->role === 'Penerima')
                            <div class="mb-3 row">
                                <label for="alamat" class="col-md-3 col-form-label"><b>{{ __('Alamat') }}</b></label>
                                <div class="col-md-9">
                                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $detail->alamat }}"   placeholder="Masukkan alamat">
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
                                    <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ $detail->no_hp }}"   placeholder="nomor handphone">
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
                                    <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"  >{{ $detail ? $detail->deskripsi : old('deskripsi') }}</textarea>

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
                            @endif

                            <br>
                            <div class="text-center">
                                <div class="my-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Simpan Perubahan') }}
                                    </button>
                                    <a href="{{ route('profil.index') }}" class="btn btn-secondary">
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