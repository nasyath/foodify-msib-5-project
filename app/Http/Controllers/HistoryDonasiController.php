<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Donasi;
use Illuminate\Http\Request;

class HistoryDonasiController extends Controller
{


    public function index()
    {
        $ar_history = Donasi::select(
            'tb_donasi.id',
            'tb_donasi.status',
            'tb_donasi.tgl_mulai',
            'tb_donasi.tgl_akhir',
            'tb_donasi.jumlah',
            'tb_donasi.foto',
            'tb_donasi.keterangan',
            'tb_donatur.nama_donatur',
            'tb_penerima.nama_penerima',
            'tb_jenis_makanan.nama_jenis'
        )
            ->join('tb_jenis_makanan', 'tb_jenis_makanan.id', '=', 'tb_donasi.id_makanan')
            ->join('tb_penerima', 'tb_penerima.id', '=', 'tb_donasi.id_penerima')
            ->join('tb_donatur', 'tb_donatur.id', '=', 'tb_donasi.id_donatur')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.history_donasi', compact('ar_history'));
    }

    public function show(string $id)
    {
        $detail_history = Donasi::select(
            'tb_donasi.status',
            'tb_donasi.tgl_mulai',
            'tb_donasi.tgl_akhir',
            'tb_donasi.jumlah',
            'tb_donasi.foto',
            'tb_donasi.keterangan',
            'tb_donatur.nama_donatur',
            'tb_penerima.nama_penerima',
            'tb_jenis_makanan.nama_jenis'
        )
            ->join('tb_jenis_makanan', 'tb_jenis_makanan.id', '=', 'tb_donasi.id_makanan')
            ->join('tb_penerima', 'tb_penerima.id', '=', 'tb_donasi.id_penerima')
            ->join('tb_donatur', 'tb_donatur.id', '=', 'tb_donasi.id_donatur')
            ->where('tb_donasi.id', $id)
            ->first();

        return view('admin.detail_history', compact('detail_history'));
    }
}
