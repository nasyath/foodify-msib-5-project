@extends('themes.template')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card" style="width: 50%; margin-left:50px">
                    <div class="card-header">
                        <h4 class="card-title">Form Jenis Makanan</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('kelola_jenis.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Nama Jenis Makanan</label>
                                <input type="text" class="form-control" name="nama_jenis" id="formrow-firstname-input">
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
@endsection
