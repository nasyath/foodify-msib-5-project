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
        return view('admin.kelola_jmakanan', compact('ar_jmakanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ar_jmakanan = JMakanan::all();
        return view('admin.form_tambahjenis', compact('ar_jmakanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jenis' => 'required|max:45',
        ], [
            'nama_jenis.required' => 'Nama Jenis Makanan Wajib Diisi',
            'nama_jenis.max' => 'Nama Jenis Makanan Maksimal 45 karakter',
        ]);

        try {
            // Insert data menggunakan Eloquent
            JMakanan::create([
                'nama_jenis' => $request->nama_jenis,
            ]);

            return redirect()->route('kelola_jenis.index')
                             ->with('success', 'Data Jenis Makanan Baru Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('kelola_jenis.index')
                             ->with('error', 'Terjadi Kesalahan Saat Input Data!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $ar_jmakanan = JMakanan::find($id);

        return view('admin.edit_tambahjenis', compact('ar_jmakanan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_jenis' => 'required|max:255',
            // Sesuaikan validasi lainnya sesuai kebutuhan
        ]);

        JMakanan::where('id', $id)->update([
            'nama_jenis' => $request->nama_jenis,
            // Sesuaikan kolom lainnya sesuai kebutuhan
        ]);

        return redirect()->route('kelola_jenis.index')
                        ->with('success', 'Data Jenis Makanan Berhasil Diubah');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Hapus data dari tabel
            JMakanan::where('id', $id)->delete();

            return redirect()->route('kelola_jenis.index')
                             ->with('success', 'Data Jenis Makanan Berhasil Dihapus');
        } catch (\Exception $e) {
            return redirect()->route('kelola_jenis.index')
                             ->with('error', 'Terjadi Kesalahan Saat Menghapus Data!');
        }
    }
}
