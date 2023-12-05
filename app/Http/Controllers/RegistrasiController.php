<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Donatur;
use App\Penerima;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    // public function showRegistrationForm()
    // {
    //     return view('register');
    // }

    // public function register(Request $request)
    // {
    //     // Validasi input dari form registrasi
    //     $validatedData = $request->validate([
    //         'username' => 'required|unique:users',
    //         'password' => 'required',
    //         'role' => 'required|in:Donatur,Organisasi Penerima'
    //         // tambahkan validasi lainnya sesuai kebutuhan
    //     ]);

    //     // Membuat user baru
    //     $user = new User();
    //     $user->username = $request->username;
    //     $user->password = Hash::make($request->password);
    //     $user->role = $request->role;
    //     $user->save();

    //     // Memeriksa peran (role) dan membuat entri di tabel yang sesuai
    //     if ($request->role === 'Donatur') {
    //         $donatur = new Donatur();
    //         $donatur->User_id = $user->id;
    //         $donatur->save();

    //     } else if ($request->role === 'Penerima') {
    //         $penerima = new Penerima();
    //         $penerima->User_id = $user->id;
    //         $penerima->save(); 
    //     }

    //     // Redirect atau response sesuai kebutuhan setelah registrasi berhasil
    //     return redirect('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    // }
}
