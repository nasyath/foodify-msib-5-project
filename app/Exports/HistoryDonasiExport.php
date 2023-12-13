<?php
namespace App\Exports;

use App\Models\Donasi;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HistoryDonasiExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            return Donasi::join('tb_jenis_makanan', 'tb_jenis_makanan.id', '=', 'tb_donasi.id_makanan')
                ->join('tb_penerima', 'tb_penerima.id', '=', 'tb_donasi.id_penerima')
                ->join('tb_donatur', 'tb_donatur.id', '=', 'tb_donasi.id_donatur')
                ->select('tb_donatur.nama_donatur', 'tb_penerima.nama_penerima', 'tb_jenis_makanan.nama_jenis', 'tb_donasi.jumlah', 'tb_donasi.tgl_mulai', 'tb_donasi.tgl_akhir', 'tb_donasi.status')
                ->get();
        } elseif ($user->isDonatur() || $user->isPenerima()) {
            return Donasi::join('tb_jenis_makanan', 'tb_jenis_makanan.id', '=', 'tb_donasi.id_makanan')
                ->join('tb_penerima', 'tb_penerima.id', '=', 'tb_donasi.id_penerima')
                ->join('tb_donatur', 'tb_donatur.id', '=', 'tb_donasi.id_donatur')
                ->where(function ($query) use ($user) {
                    $query->where('tb_donatur.users_id', $user->id)
                        ->orWhere('tb_penerima.users_id', $user->id);
                })
                ->select( 'tb_donatur.nama_donatur', 'tb_penerima.nama_penerima', 'tb_jenis_makanan.nama_jenis', 'tb_donasi.jumlah', 'tb_donasi.tgl_mulai', 'tb_donasi.tgl_akhir', 'tb_donasi.status')
                ->get();
        }

        return collect();
    }

    public function headings(): array
    {
        return ["Nama Donatur", "Nama Penerima", "Jenis Makanan", "Jumlah", "Tanggal Mulai", "Tanggal Akhir", "Status"];
    }
}