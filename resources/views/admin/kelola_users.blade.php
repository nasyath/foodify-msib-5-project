@extends('themes.template')
@section('content')
@php
$ar_judul = ['No','Email','Role', 'Nama Organisasi','Aksi'];
$no = 1;
@endphp
<div class="page-content" align="left">
    <div class="container-fluid" style="padding:0px 50px 0px 50px">
        <h3>Kelola Users</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Kelola Users</li>
        </ol>
        <div>
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            @if($message = Session::get('error'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>
        <a href="{{ route('form_akun') }}" type="button" class="btn btn-primary mb-2 waves-effect waves-light" title="Tambah User">
            Tambah
        </a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <b>Data Users</b>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            @foreach($ar_judul as $jdl)
                            <th>{{ $jdl }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ar_donatur as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->role }}</td>
                            <td>{{ $d->organisasi }}</td>
                            <td>
                                <form method="POST" action="{{ route('kelola_users.destroy', $d->id) }}">
                                    <a class="btn btn-info btn-sm" href="{{ route('kelola_users.show', $d->id) }}" title="Detail Akun">
                                        <i class="far fa-file-alt" style="width:16px;height:16px"></i>
                                    </a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('form_edit_akun', $d->id) }}" title="Edit Akun">
                                        <i class="fas fa-pen" style="width:16px;height:16px"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus User" onclick="return confirm('Anda yakin ingin menghapus akun?')">
                                        <i class="fas fa-trash" style="width:16px;height:16px"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection