@extends('themes.template')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <h5 class="card-title">Proses Donasi<span class="text-muted fw-normal ms-2">({{ $donasiList->count() }})</span></h5>
                </div>
            </div>
        </div>

        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="table-responsive">
                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Donatur</th>
                                    <th scope="col">Nama Penerima</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Mulai</th>
                                    <th scope="col">Akhir</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" style="width: 200px;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- Iterasi melalui data donasi dari controller -->
                                @foreach ($donasiList as $donasi)
                                <tr>
                                    <td>{{ $donasi->donatur->nama_donatur }}</td>
                                    <td>{{ $donasi->penerima->nama_penerima }}</td>
                                    <td>{{ $donasi->jmakanan->nama_jenis }}</td>
                                    <td>{{ $donasi->jumlah }}</td>
                                    <td>{{ $donasi->tgl_mulai }}</td>
                                    <td>{{ $donasi->tgl_akhir }}</td>
                                    <td>
                                        @if ($donasi->status === 'Diterima')
                                        <span class="badge bg-success-subtle text-success  mb-0">Diterima</span>
                                        @elseif ($donasi->status === 'Ditolak')
                                        <span class="badge bg-danger-subtle text-danger  mb-0">Ditolak</span>
                                        @elseif ($donasi->status === 'Pending')
                                        <span class="badge bg-secondary-subtle text-secondary  mb-0">Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                         @if ($donasi->status === 'Pending')
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="{{ route('edit_donasi', $donasi->id) }}" class="btn btn-link text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <i class="bx bx-pen font-size-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <form action="{{ route('delete_donasi', $donasi->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus donasi ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <i class="bx bx-trash-alt font-size-18"></i>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                        @elseif ($donasi->status === 'Diterima')
                                        <span class="badge bg-success-subtle text-success  mb-0">Diterima</span>
                                        @elseif ($donasi->status === 'Ditolak')
                                        <span class="badge bg-danger-subtle text-danger  mb-0">Ditolak</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- Tambahkan modal tambahan di sini jika diperlukan -->

@endsection