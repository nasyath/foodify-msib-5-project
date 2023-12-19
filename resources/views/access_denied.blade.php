@extends('themes.template')
@section('content')
<div class="auth-bg bg-white py-md-5 p-4 d-flex mt-4">
    <div class="bg-overlay bg-white"></div>
    <!-- end bubble effect -->
    <div class="row justify-content-center align-items-center mx-auto">
        <div class="col-xl-12">
            <div class="mt-4" align="center">
                <img src="{{ asset('backend/assets/images/maintenance.png') }}" class="img-fluid" alt="" width="70%">
            </div>
            <div class="p-0 p-sm-4 px-xl-0 py-5">
                <div class="testi-contain text-center">
                    <h5 class="font-size-24 mt-4">Akses Ditolak</h5>
                    <p class="font-size-16 text-muted mt-3 mb-0">You do not have permission to access this page. <br>Please contact the administrator for assistance.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection