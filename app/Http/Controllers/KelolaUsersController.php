<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Penerima;
use App\Models\Donatur;

use Illuminate\Http\Request;

class KelolaUsersController extends Controller
{
    public function index()
    {
        $ar_penerima = Penerima::select('users.id', 'users.email', 'users.role', 'tb_penerima.nama_penerima AS organisasi', 'tb_penerima.created_at AS waktu_pembuatan')
            ->join('users', 'users.id', '=', 'tb_penerima.users_id')
            ->orderBy('tb_penerima.created_at', 'desc');

        $ar_donatur = Donatur::select('users.id', 'users.email', 'users.role', 'tb_donatur.nama_donatur AS organisasi', 'tb_donatur.created_at AS waktu_pembuatan')
            ->join('users', 'users.id', '=', 'tb_donatur.users_id')
            ->union($ar_penerima)
            ->orderBy('waktu_pembuatan', 'desc')
            ->get();

        return view('admin.kelola_users', compact('ar_donatur'));
    }

    public function destroy($id)
    {
        // Hapus data berdasarkan $id dari tabel Penerima
        $ar_penerima = Penerima::find($id);
        if ($ar_penerima) {
            $ar_penerima->delete();
            return redirect()->route('admin.kelola_users')->with('success', 'Data User (penerima) berhasil dihapus.');
        }

        // Jika data tidak ditemukan di tabel Penerima, coba hapus dari tabel Donatur
        $ar_donatur = Donatur::find($id);
        if ($ar_donatur) {
            $ar_donatur->delete();
            return redirect()->route('admin.kelola_users')->with('success', 'Data User (donatur) berhasil dihapus.');
        }

        // Jika tidak ada data dengan ID yang diberikan di kedua tabel
        return redirect()->route('admin.kelola_users')->with('error', 'Data tidak ditemukan.');
    }
}
