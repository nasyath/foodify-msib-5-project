<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\HistoryDonasiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Donasi;
use PDF;
use Illuminate\Support\Facades\Auth;

class DonasiPenerimaController extends Controller
{
    public function index()
    {
        $donasiList = Donasi::where('id_penerima', auth()->user()->penerima->id)->orderBy('id', 'desc') ->get();
        return view('penerima.proses_donasi_penerima', compact('donasiList'));
    }

    public function show($id)
    {
        // Fetch the donation data from the database based on $id
        $donasi = Donasi::findOrFail($id);

        // Fetch the related Donatur data
        $donatur = $donasi->donatur;

        // You may also need to retrieve additional information, such as penerima details, etc.

        // Return the view with the donation and donatur data
        return view('penerima.detail_donasi_penerima', compact('donasi', 'donatur'));
    }

    public function terimaDonasi($id)
    {
        $donasi = Donasi::findOrFail($id);
        // Implement your logic for accepting the donation here
        // Update the status or perform any other necessary actions
        $donasi->status = 'Diterima';
        $donasi->save();

        return redirect()->route('proses_donasi_penerima')->with('success', 'Donasi diterima.');
    }

    public function tolakDonasi($id)
    {
        $donasi = Donasi::findOrFail($id);
        // Implement your logic for rejecting the donation here
        // Update the status or perform any other necessary actions
        $donasi->status = 'Ditolak';
        $donasi->save();

        return redirect()->route('proses_donasi_penerima')->with('success', 'Donasi ditolak.');
    }

    public function history()
    {
        $historyDonasi = Donasi::where('id_penerima', auth()->user()->penerima->id)->orderBy('id', 'desc')->get();
        return view('penerima.history_donasi', compact('historyDonasi'));
    }

    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to Kampus Merdeka',
            'date' => date('d-m-Y H:i:s')
        ];

        $pdf = PDF::loadView('penerima.tesPDF', $data);

        return $pdf->download('data_tespdf_' . date('d-m-Y_H:i:s') . '.pdf');
    }

    public function historyPDF()
    {
        $userId = Auth::id();

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
            ->where('tb_penerima.users_id', $userId) // Menggunakan users_id pada tabel penerima
            ->orderBy('tb_donasi.id', 'desc')
            ->get();

        $pdf = PDF::loadView('penerima.historyPDF', ['ar_history' => $ar_history]);
        return $pdf->download('data_donasi_' . date('d-m-Y_H:i:s') . '.pdf');
    }

    public function historyExcel()
    {
        return Excel::download(new HistoryDonasiExport, 'data_donasi_'.date('d-m-Y_H:i:s').'.xlsx');
    }
}
