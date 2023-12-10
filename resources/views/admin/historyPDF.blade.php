@php
$ar_judul = ['No','Nama Donatur','Nama Penerima','Jenis Makanan','Jumlah','Tanggal Mulai','Tanggal Akhir','Status'];
$no = 1;
@endphp
<h1 align="center">Daftar Donasi</h1>
<hr>
<br /><br />
<table border="1" align="center" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            @foreach($ar_judul as $jdl)
            <th>{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($ar_history as $hd)
        <tr>
            <td align="center">{{ $no++ }}</td>
            <td>{{ $hd->nama_donatur }}</td>
            <td>{{ $hd->nama_penerima }}</td>
            <td>{{ $hd->nama_jenis }}</td>
            <td align="center">{{ $hd->jumlah }}</td>
            <td align="center">{{ $hd->tgl_mulai }}</td>
            <td align="center">{{ $hd->tgl_akhir }}</td>
            <td align="center">
                @if($hd->status === 'Pending')
                <span>Pending</span>
                @elseif($hd->status === 'Diterima')
                <span>Diterima</span>
                @elseif($hd->status === 'Ditolak')
                <span>Ditolak</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>