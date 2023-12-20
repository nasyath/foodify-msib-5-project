<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Penerima;
use App\Models\Donatur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class KelolaUsersController extends Controller
{
    public function index()
    {
        $ar_penerima = Penerima::select('users.id', 'users.email', 'users.role', 'tb_penerima.nama_penerima AS organisasi', 'tb_penerima.created_at AS waktu_pembuatan')
            ->join('users', 'users.id', '=', 'tb_penerima.users_id')
            ->orderBy('waktu_pembuatan', 'desc');

        $ar_donatur = Donatur::select('users.id', 'users.email', 'users.role', 'tb_donatur.nama_donatur AS organisasi', 'tb_donatur.created_at AS waktu_pembuatan')
            ->join('users', 'users.id', '=', 'tb_donatur.users_id')
            ->union($ar_penerima)
            ->orderBy('waktu_pembuatan', 'desc')
            ->get();

        return view('admin.kelola_users', compact('ar_donatur'));
    }

    public function show($id)
    {
        $userakun = User::findOrFail($id);

        // Check the role of the user
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

        return view('admin.detail_akun', compact('userakun', 'detail'));
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

    public function form_akun()
    {
        return view('admin.tambah_akun');
    }

    public function form_edit_akun($id)
    {
        // Ambil data user sesuai ID
        $userakun = User::findOrFail($id);

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

        return view('admin.edit_akun', compact('userakun', 'detail'));
    }



    public function tambah_akun(Request $request)
    {
        // Validate the form data for the combined steps
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:donatur,penerima',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'foto' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Create the user and additional data based on the role
        $user = User::create([
            'username' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
        if ($request->hasFile('foto')) {
            try {
                $extension = $request->file('foto')->getClientOriginalExtension();
                $filename = 'user_photo_' . time() . '.' . $extension;

                // Store the file and get the path
                $path = 'backend/assets/images/users/' . $filename;
                $request->file('foto')->move(public_path('backend/assets/images/users'), $filename);
            } catch (\Exception $e) {
                return back()->withErrors(['foto' => $e->getMessage()])->withInput();
            }
        } else {
            // If no file is uploaded, set $path to null or any default value you want
            $path = null;
        }

        if ($data['role'] === 'donatur') {
            $donatur = Donatur::create([
                'nama_donatur' => $data['name'],
                'alamat' => $data['alamat'],
                'no_hp' => $data['no_hp'],
                'deskripsi' => $data['deskripsi'],
                'foto' => $path,
                'users_id' => $user->id,
            ]);
        } elseif ($data['role'] === 'penerima') {
            $penerima = Penerima::create([
                'nama_penerima' => $data['name'],
                'alamat' => $data['alamat'],
                'no_hp' => $data['no_hp'],
                'deskripsi' => $data['deskripsi'],
                'foto' => $path,
                'users_id' => $user->id,
            ]);
        }

        $user->save();

        // Redirect to the home page or any other desired page
        return redirect()->route('admin.kelola_users');
    }

    public function edit_akun(Request $request, $id)
    {
        // Validate the form data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'foto' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        // Find the user based on ID
        $userakuns = User::findOrFail($id);

        // Update basic user information
        $userakuns->update([
            'username' => $data['name'],
        ]);

        // Update role-specific details
        if ($userakuns->role === 'Donatur') {
            $userakuns->donatur->update([
                'nama_donatur' => $data['name'],
                'alamat' => $data['alamat'],
                'no_hp' => $data['no_hp'],
                'deskripsi' => $data['deskripsi'],
            ]);
        } elseif ($userakuns->role === 'Penerima') {
            $userakuns->penerima->update([
                'nama_penerima' => $data['name'],
                'alamat' => $data['alamat'],
                'no_hp' => $data['no_hp'],
                'deskripsi' => $data['deskripsi'],
            ]);
        }

        // Handle photo upload if provided
        if ($request->hasFile('foto')) {
            try {
                $extension = $request->file('foto')->getClientOriginalExtension();
                $filename = 'user_photo_' . time() . '.' . $extension;

                // Store the file and get the path
                $path = 'backend/assets/images/users/' . $filename;
                $request->file('foto')->move(public_path('backend/assets/images/users'), $filename);

                // Update the photo path in the user's role-specific table
                if ($userakuns->role === 'Donatur') {
                    $userakuns->donatur->update(['foto' => $path]);
                } elseif ($userakuns->role === 'Penerima') {
                    $userakuns->penerima->update(['foto' => $path]);
                }
            } catch (\Exception $e) {
                return back()->withErrors(['foto' => $e->getMessage()])->withInput();
            }
        }

        return redirect()->route('admin.kelola_users')->with('success', 'User berhasil diubah');
    }
}
