<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi; //panggil model
use App\Models\Penerima; //panggil model
use App\Models\JMakanan;
use PDF;
use App\Exports\HistoryDonasiExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Aktifkan log query

        // Ambil data donasi dari database dengan Eloquent
        $donasiList = Donasi::with(['donatur:id,nama_donatur', 'penerima:id,nama_penerima', 'jmakanan:id,nama_jenis'])
            ->where('id_donatur', auth()->user()->donatur->id)
            ->select(
                'id',
                'jumlah',
                'tgl_mulai',
                'tgl_akhir',
                'foto',
                'keterangan',
                'status',
                'id_donatur', // tambahkan id_donatur
                'id_penerima', // tambahkan id_penerima
                'id_makanan' // tambahkan id_makanan
            )
            ->orderBy('id', 'desc')
            ->get();


        // Kirim data donasi ke view
        return view('donatur.proses_donasi', compact('donasiList'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $donatur = Auth::user();
        // Mengambil informasi Donatur yang sedang login
        $penerimaDonasi = Penerima::findOrFail($id);
        $jenisMakananOptions = JMakanan::pluck('nama_jenis', 'id');
        // Tampilkan formulir donasi
        return view('donatur.form_donasi', compact('penerimaDonasi', 'donatur', 'jenisMakananOptions'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form input
        $validatedData = $request->validate([
            'id_makanan' => 'required|exists:tb_jenis_makanan,id',
            'jumlah' => 'required|numeric|min:1',
            'keterangan' => 'nullable|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_penerima' => 'required|numeric',
        ]);
        // Create a new Donasi instance
        $donasi = new Donasi();

        // Assign values to the Donasi instance
        $donasi->status = 'Pending'; // Default status
        $donasi->tgl_mulai = $validatedData['tanggal_mulai'];
        $donasi->tgl_akhir = $validatedData['tanggal_akhir'];
        $donasi->jumlah = $validatedData['jumlah'];
        $donasi->keterangan = $validatedData['keterangan'];
        $donasi->id_donatur = Auth::user()->donatur->id; // Get the Donatur's id
        $donasi->id_penerima = $validatedData['id_penerima']; // Assume you have a hidden input for id_penerima
        $donasi->id_makanan = $validatedData['id_makanan'];
        // Handle file upload
        if ($request->hasFile('foto')) {
            $originalName = $request->file('foto')->getClientOriginalName();
            $extension = $request->file('foto')->getClientOriginalExtension();
            $timestamp = time();
            $newFileName = $timestamp . '_' . pathinfo($originalName, PATHINFO_FILENAME) . '.' . $extension;

            $request->file('foto')->move(public_path('backend/assets/images/donasi'), $newFileName);

            // Simpan path ke kolom foto
            $donasi->foto = 'backend/assets/images/donasi/' . $newFileName;
        }



        // Save the Donasi instance to the database
        $donasi->save();

        // Redirect or return a response as needed
        return redirect()->route('proses_donasi')->with('success', 'Data donasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penerimaDonasi = Penerima::findOrFail($id);

        return view('donatur.detail_penerima', compact('penerimaDonasi'));
    }

    public function showDetail($id)
    {
        $donasi = Donasi::with(['penerima'])->findOrFail($id);
        // Ambil data donasi berdasarkan ID
        $penerima = $donasi->penerima;


        // Tampilkan view untuk menampilkan detail donasi
        return view('donatur.detail_donasi', compact('donasi','penerima'));
    }

    public function historyDetail($id)
    {
        $donasi = Donasi::with(['penerima'])->findOrFail($id);
        // Ambil data donasi berdasarkan ID
        $penerima = $donasi->penerima;

        // Tampilkan view untuk menampilkan detail donasi
        return view('donatur.detail_history', compact('donasi','penerima'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Fetch the donation data from the database based on $id
        $donasi = Donasi::findOrFail($id);

        $donatur = Auth::user();
        // Mengambil informasi Donatur yang sedang login
        $penerimaDonasi = Penerima::findOrFail($donasi->id_penerima);
        $jenisMakananOptions = JMakanan::pluck('nama_jenis', 'id');

        // Tampilkan formulir donasi
        return view('donatur.edit_donasi', compact('donasi', 'penerimaDonasi', 'donatur', 'jenisMakananOptions'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate form input
        $validatedData = $request->validate([
            'id_makanan' => 'required|exists:tb_jenis_makanan,id',
            'jumlah' => 'required|numeric|min:1',
            'keterangan' => 'nullable|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_penerima' => 'required|numeric',
        ]);

        // Find the Donasi record by ID
        $donasi = Donasi::findOrFail($id);

        // Update values in the Donasi instance
        $donasi->tgl_mulai = $validatedData['tanggal_mulai'];
        $donasi->tgl_akhir = $validatedData['tanggal_akhir'];
        $donasi->jumlah = $validatedData['jumlah'];
        $donasi->keterangan = $validatedData['keterangan'];
        $donasi->id_penerima = $validatedData['id_penerima'];
        $donasi->id_makanan = $validatedData['id_makanan'];

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Delete the existing photo if it exists
            if ($donasi->foto) {
                unlink(public_path($donasi->foto));
            }

            $originalName = $request->file('foto')->getClientOriginalName();
            $extension = $request->file('foto')->getClientOriginalExtension();
            $timestamp = time();
            $newFileName = $timestamp . '_' . pathinfo($originalName, PATHINFO_FILENAME) . '.' . $extension;

            $request->file('foto')->move(public_path('backend/assets/images/donasi'), $newFileName);

            // Save the new photo path to the Donasi instance
            $donasi->foto = 'backend/assets/images/donasi/' . $newFileName;
        }

        // Save the updated Donasi instance to the database
        $donasi->save();

        // Redirect or return a response as needed
        return redirect()->route('proses_donasi')->with('success', 'Data donasi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari data donasi berdasarkan ID
        $donasi = Donasi::find($id);

        // Hapus donasi jika ditemukan
        if ($donasi) {
            // Hapus file foto secara langsung
            if ($donasi->foto) {
                $filePath = public_path($donasi->foto);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            // Hapus data donasi dari database
            $donasi->delete();

            return redirect()->back()->with('success', 'Donasi berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Donasi tidak ditemukan.');
        }
    }


    public function eksplorasi()
    {
        $penerimaDonasi = Penerima::where('status', 'Open')->paginate(8); // Misalnya, menampilkan 10 data per halaman
        $totalPenerima = count($penerimaDonasi);
        $donatur = auth()->user();
        return view('donatur.eksplor', compact('penerimaDonasi', 'totalPenerima', 'donatur'));
    }

    public function history()
    {
        $historyDonasi = Donasi::with(['donatur:id,nama_donatur', 'penerima:id,nama_penerima', 'jmakanan:id,nama_jenis'])
            ->where('id_donatur', auth()->user()->donatur->id)
            ->orderBy('id', 'desc')
            ->select(
                'id',
                'jumlah',
                'tgl_mulai',
                'tgl_akhir',
                'foto',
                'keterangan',
                'status',
                'id_donatur', // tambahkan id_donatur
                'id_penerima', // tambahkan id_penerima
                'id_makanan' // tambahkan id_makanan
            )->get();

        // Kirim data donasi ke view
        return view('donatur.history_donasi', compact('historyDonasi'));
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
            ->where('tb_donatur.users_id', $userId) // Menggunakan users_id pada tabel penerima
            ->orderBy('tb_donasi.id', 'desc')
            ->get();

        $pdf = PDF::loadView('donatur.historyPDF', ['ar_history' => $ar_history]);
        return $pdf->download('data_donasi_' . date('d-m-Y_H:i:s') . '.pdf');
    }

    public function historyExcel()
    {
        return Excel::download(new HistoryDonasiExport, 'data_donasi_'.date('d-m-Y_H:i:s').'.xlsx');
    }
}
