<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JMakanan; //panggil model
use Illuminate\Support\Facades\DB; // jika pakai query builder
use Illuminate\Database\Eloquent\Model; //jika pakai eloquent


class JMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$ar_jmakanan = JMakanan::all();//eloquent
        $ar_jmakanan = JMakanan::orderBy('id', 'desc')->get();
        return view('admin.jenis_makanan.index', compact('ar_jmakanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $ar_kondisi = ['Baik','Sedang','Rusak'];
        // return view('admin.form_tambahJM', compact('ar_kategori','ar_kondisi'));
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
        //
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
        //elequent
        JMakanan::find($id)->delete();
        return redirect()->route('jenis_makanan.index')
            ->with('success','Data Jenis Makanan Berhasil Dihapus');
    }
}
// Asset => JMakanan
// ar_asset => ar_jmakanan