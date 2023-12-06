<?php

namespace App\Http\Controllers;
use App\Models\Donasi;
use Illuminate\Http\Request;

class HistoryDonasiController extends Controller
{
    public function index(){
        $ar_history = Donasi::select('tb_donatur.nama_donatur', 'tb_donasi.tgl_mulai', 'tb_donasi.tgl_akhir', 'tb_penerima.nama_penerima', 'tb_donasi.status')
        ->join('tb_penerima', 'tb_penerima.id', '=', 'tb_donasi.id_penerima')
        ->join('tb_donatur', 'tb_donatur.id', '=', 'tb_donasi.id_donatur')
        ->get();

        return view('admin.history_donasi', compact('ar_history'));
    }
}
