@extends('landingpage.themes.template')

@section('content')
<section class="xs-content-section-padding">
    <div class="container">
        <hr>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="mt-4">Selamat datang di FOODIFY</h3>
                        <p>Silakan buat akun kamu dengan melengkapi data di bawah</p>
                    </div>
                    <div class="card-body mx-4">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Name') }}</strong></label>
                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Email Address') }}</strong></label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Password') }}</strong></label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Confirm Password') }}</strong></label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="role" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Role') }}</strong></label>

                                <div class="col-md-12">
                                    <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required>
                                        <option value="donatur">Donatur</option>
                                        <option value="penerima">Penerima</option>
                                    </select>

                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <!-- Informasi tambahan sesuai dengan role -->
                            <div class="form-group">
                                <label for="alamat" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Alamat') }}</strong></label>
                                <div class="col-md-12">
                                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required>
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_hp" class="col-md-4 col-form-label text-md-end"><strong>{{ __('No HP') }}</strong></label>
                                <div class="col-md-12">
                                    <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required>
                                    @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Deskripsi') }}</strong></label>
                                <div class="col-md-12">
                                    <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required>{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="foto" class="col-md-4 col-form-label text-md-end"><strong>{{ __('Foto') }}</strong></label>
                                <div class="col-md-12">
                                    <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                                </div>
                            </div>

                            <div class="text-center">
                                <div class="my-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                <p>Sudah mempunyai akun? Silakan <a href="{{ route('login') }}">Login</a></p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection