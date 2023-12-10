<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use PDF;
use App\Exports\HistoryDonasiExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\View;

class HistoryDonasiController extends Controller
{


    public function index()
    {
        $userId = Auth::id();
        $userRole = Auth::user()->role;
    
        $query = Donasi::select(
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
            ->leftJoin('tb_donatur', 'tb_donatur.id', '=', 'tb_donasi.id_donatur')
            ->leftJoin('tb_penerima', 'tb_penerima.id', '=', 'tb_donasi.id_penerima')
            ->leftJoin('tb_jenis_makanan', 'tb_jenis_makanan.id', '=', 'tb_donasi.id_makanan');
    
        if ($userRole != 'Admin') {
            $query->where(function ($query) use ($userId) {
                $query->where('tb_donatur.users_id', $userId)
                    ->orWhere('tb_penerima.users_id', $userId);
            });
        }
    
        $ar_history = $query
            ->orderBy('tb_donasi.id', 'desc')
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

    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to Kampus Merdeka',
            'date' => date('d-m-Y H:i:s')
        ];
          
        $pdf = PDF::loadView('admin.tesPDF', $data);
    
        return $pdf->download('data_tespdf_'.date('d-m-Y_H:i:s').'.pdf');
    }

    public function historyPDF(){
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

        $pdf = PDF::loadView('admin.historyPDF', 
                              ['ar_history'=>$ar_history]);
        return $pdf->download('data_donasi_'.date('d-m-Y_H:i:s').'.pdf');
    }

    public function historyExcel() 
    {
        return Excel::download(new HistoryDonasiExport, 'data_donasi_'.date('d-m-Y_H:i:s').'.xlsx');
    }
 
}
