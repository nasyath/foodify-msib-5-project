<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penerimaDonasi = Penerima::findOrFail($id);
    
        return view('donatur.detail_penerima', compact('penerimaDonasi'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function eksplorasi()
    {
        $penerimaDonasi = Penerima::where('status', 'Open')->get();
        $totalPenerima = count($penerimaDonasi);
    
        return view('donatur.eksplor', compact('penerimaDonasi', 'totalPenerima'));
    
    }
}
