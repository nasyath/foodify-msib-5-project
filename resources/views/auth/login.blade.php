@extends('landingpage.themes.template')

@section('content')
<section class="xs-content-section-padding">
    <div class="container">
        <hr>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8"> <!-- Adjusted column width -->
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="mt-4">Selamat datang di FOODIFY</h3>
                        <p>Silahkan login terlebih dahulu</p>
                    </div>

                    <div class="card-body mx-xl-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email"><strong>{{ __('Email Address') }}</strong></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password"><strong>{{ __('Password') }}</strong></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <p>Kamu belum mempunyai akun? Silakan <a href="{{ route('register') }}">daftar di sini</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection