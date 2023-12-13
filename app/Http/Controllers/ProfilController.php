<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donatur;
use App\Models\Penerima;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{

    public function index()
    {
        $currentUserId = auth()->user()->id;
        $userinfo = User::find($currentUserId);

        // Logging informasi user
        Log::info('User Info:', $userinfo->toArray());

        // Jika user adalah Admin, gunakan langsung $userinfo sebagai $userProfile
        $userProfile = $userinfo->role === 'Admin' ? $userinfo : $userinfo->load('Donatur', 'Penerima');

        // Gunakan compact untuk mengirimkan data ke view
        return view('profil.index', compact('userProfile', 'userinfo'));
    }

    public function openStatus()
    {
        // Implementasi untuk membuka status
        // Misalnya, update status pada tabel Penerima
        DB::table('tb_penerima')
            ->where('users_id', auth()->user()->id)
            ->update(['status' => 'Open']);

        return redirect()->route('profil.index')->with('success', 'Status berhasil diubah menjadi Open.');
    }

    public function closeStatus()
    {
        // Implementasi untuk menutup status
        // Misalnya, update status pada tabel Penerima
        DB::table('tb_penerima')
            ->where('users_id', auth()->user()->id)
            ->update(['status' => 'Close']);

        return redirect()->route('profil.index')->with('success', 'Status berhasil diubah menjadi Close.');
    }
}
