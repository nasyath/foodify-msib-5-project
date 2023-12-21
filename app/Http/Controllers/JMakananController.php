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
        $existingJenis = JMakanan::where('nama_jenis', $request->nama_jenis)->first();

        if ($existingJenis) {
            // Tampilkan alert jika nama jenis sudah ada
            return redirect()->route('kelola_jenis_makanan.index')
                ->with('error', 'Jenis Makanan Sudah Tersedia.');
        }

        // Lakukan penyimpanan jika tidak ada duplikat
        JMakanan::create($request->all());

        // Redirect atau tindakan lain setelah penyimpanan berhasil
        return redirect()->route('kelola_jenis_makanan.index')
            ->with('success', 'Jenis Makanan Baru Berhasil Ditambahkan');
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
        $jenis_makanan = JMakanan::find($id);

        return view('admin.edit_jenis_makanan', compact('jenis_makanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jenis' => 'required|unique:tb_jenis_makanan,nama_jenis,' . $id . '|max:255',
        ], [
            'nama_jenis.unique' => 'Jenis makanan sudah ada.',
        ]);

        JMakanan::where('id', $id)->update(['nama_jenis' => $request->nama_jenis]);

        return redirect()->route('kelola_jenis_makanan.index')
            ->with('success', 'Data Jenis Makanan Berhasil Diubah');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //elequent
        JMakanan::find($id)->delete();
        return redirect()->route('kelola_jenis_makanan.index')
            ->with('success', 'Data Jenis Makanan Berhasil Dihapus');
    }

    public function apiJMakanan()
    {
        $jmakanan = JMakanan::all();
        return response()->json(
            [
                'success' => true,
                'message' => 'Data Jenis Makanan',
                'data' => $jmakanan
            ],
            200
        );
    }
}
// Asset => JMakanan
// ar_asset => ar_jmakanan
