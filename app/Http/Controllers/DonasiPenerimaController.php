<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;

class DonasiPenerimaController extends Controller
{
    public function index()
    {
        $donasiList = Donasi::where('id_penerima', auth()->user()->penerima->id)->get();
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
}
