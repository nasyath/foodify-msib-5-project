<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donatur;
use App\Models\Penerima;
use Illuminate\Support\Facades\Hash;
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

    public function form_edit_profil()
    {
        // Ambil data user sesuai ID
        $currentUserId = auth()->user()->id;
        $userakun = User::findOrFail($currentUserId);

        // Sesuaikan dengan model dan relasinya
        switch ($userakun->role) {
            case 'Donatur':
                $detail = Donatur::where('users_id', $userakun->id)->first();
                break;
            case 'Penerima':
                $detail = Penerima::where('users_id', $userakun->id)->first();
                break;
            // Add other roles as needed
            default:
                $detail = null;
                break;
        }

        return view('profil.edit_profil', compact('userakun', 'detail'));
    }

    public function edit_profil(Request $request)
    {
        // Validate the form data
        $data = $request->validate([
            'name' => 'sometimes|nullable|string|max:255',
            'password' => 'sometimes|nullable|string|min:8|confirmed',
            'alamat' => 'sometimes|nullable|string|max:255',
            'no_hp' => 'sometimes|nullable|string|max:255',
            'deskripsi' => 'sometimes|nullable|string|max:255',
            'foto' => ['sometimes', 'nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Find the user based on ID
        $currentUserId = auth()->user()->id;
        $userakun = User::findOrFail($currentUserId);

        // update profil
        $userData = [];

        // Menentukan nama kolom untuk update berdasarkan peran
        $nameColumn = $this->getNameColumnByRole($userakun->role);

        if ($request->filled('name')) {
            $userData[$nameColumn] = $request->input('name');
        }

        // Update password
        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->input('password'));
        }

        // Update alamat
        if ($request->filled('alamat')) {
            $userData['alamat'] = $request->input('alamat');
        }

        // Update nomor HP
        if ($request->filled('no_hp')) {
            $userData['no_hp'] = $request->input('no_hp');
        }

        // Update deskripsi
        if ($request->filled('deskripsi')) {
            $userData['deskripsi'] = $request->input('deskripsi');
        }

        // Upload dan simpan foto profil jika ada
        if ($request->hasFile('foto')) {
            try{
            $extension = $request->file('foto')->getClientOriginalExtension();
            $filename = 'user_photo_' . time() . '.' . $extension;

            // Store the file and get the path
            $path = 'backend/assets/images/users/' . $filename;
            $request->file('foto')->move(public_path('backend/assets/images/users'), $filename);

            // Menambahkan path foto ke dalam data yang akan diupdate
            // $userData['foto'] = $path;

            // Update the photo path in the user's role-specific table
            if ($userakun->role === 'Donatur') {
                $userakun->donatur->update(['foto' => $path]);
            } elseif ($userakun->role === 'Penerima') {
                $userakun->penerima->update(['foto' => $path]);
            }

            } catch (\Exception $e) {
                return back()->withErrors(['foto' => $e->getMessage()])->withInput();
            }
        }

        $userakun->update(array_filter($userData)); // Menghapus kunci nol atau kosong dari array

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diubah');
    }

    // Mendapatkan nama kolom berdasarkan peran (role)
    private function getNameColumnByRole($role)
    {
        switch ($role) {
            case 'donatur':
                return 'nama_donatur';
            case 'penerima':
                return 'nama_penerima';
            default:
                return 'username'; // Default untuk peran yang tidak dikenali
        }
    }


}
