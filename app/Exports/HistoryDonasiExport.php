<?php

namespace App\Exports;

use App\Models\Donasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class HistoryDonasiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Asset::all();
        $ar_history = DB::table('tb_donasi')
        ->join('tb_jenis_makanan', 'tb_jenis_makanan.id', '=', 'tb_donasi.id_makanan')
        ->join('tb_penerima', 'tb_penerima.id', '=', 'tb_donasi.id_penerima')
        ->join('tb_donatur', 'tb_donatur.id', '=', 'tb_donasi.id_donatur')
        ->select('tb_donasi.id', 'tb_donatur.nama_donatur', 'tb_jenis_makanan.nama_jenis', 'tb_donasi.jumlah', 'tb_donasi.tgl_mulai', 'tb_donasi.tgl_akhir', 'tb_penerima.nama_penerima', 'tb_donasi.status')
        ->get();
        
        return $ar_history;
    }

    public function headings(): array
    {
        return ["Nama Donatur", "Nama Penerima", "Jenis Makanan", "Jumlah",
                "Tanggal Mulai","Tanggal Akhir","Status"];
    }
}
