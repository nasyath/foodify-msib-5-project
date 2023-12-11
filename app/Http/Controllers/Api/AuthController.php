<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Donatur;
use App\Models\Penerima;

class AuthController extends Controller
{
    // register function to register user
    public function register(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto
        ];

        $user = User::create([
            'username' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role']
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
      
        // Logic if user role is donatur
        if ($data['role'] == 'Donatur') {
            Donatur::create([
                'nama_donatur' => $data['name'],
                'alamat' => $data['alamat'],
                'no_hp' => $data['no_hp'],
                'deskripsi' => $data['deskripsi'],
                'foto' => $path,
                'users_id' => $user->id
            ]);
        } elseif ($data['role'] == 'Penerima') {
            Penerima::create([
                'nama_penerima' => $data['name'],
                'alamat' => $data['alamat'],
                'no_hp' => $data['no_hp'],
                'deskripsi' => $data['deskripsi'],
                'foto' => $path,
                'users_id' => $user->id
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil ditambahkan',
            'data' => $user
        ]);
    }

    // login function
    public function login(Request $request) {
        // validate request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // find user by email
        $user = User::where('email', $request->email)->first();

        // if user not found
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Email tidak ditemukan',
                'data' => null
            ]);
        }

        // if password is wrong
        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Password salah',
                'data' => null
            ]);
        }

        // create token
        $token = $user->createToken('auth_token')->plainTextToken;

        // return response
        return response()->json([
            'status' => true,
            'message' => 'Login berhasil',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ]);
    }
}
