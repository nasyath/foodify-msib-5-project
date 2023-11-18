@extends('themes.template')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <b>Data Jenis Makanan</b>
            </div>
            <div class="card-body">
                <table id="datatablesSimple" width="70%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sayur</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ikan</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Buah</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Bahan pokok</td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection