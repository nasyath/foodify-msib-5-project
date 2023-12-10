<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//tambahan 
use App\Models\User;
use App\Models\Donatur;
use App\Models\Penerima;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; // jika pakai query builder
use Illuminate\Database\Eloquent\Model; //jika pakai eloquent
use Illuminate\Support\Facades\Validator; //jika pakai validasi form

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([
            'username' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
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

        if ($request['role'] === 'donatur') {
            $donatur = Donatur::create([
                'nama_donatur' => $request['name'],
                'alamat' => $request['alamat'],
                'no_hp' => $request['no_hp'],
                'deskripsi' => $request['deskripsi'],
                'foto' => $path,
                'users_id' => $user->id,
            ]);
        } elseif ($request['role'] === 'penerima') {
            $penerima = Penerima::create([
                'nama_penerima' => $request['name'],
                'alamat' => $request['alamat'],
                'no_hp' => $request['no_hp'],
                'deskripsi' => $request['deskripsi'],
                'foto' => $path,
                'users_id' => $user->id,
            ]);
        }

        $user->save();


        return response()->json([
            "status" => "success",
            "message" => "Register success"
        ]);
    }

    public function login(Request $request)
    {
        $input  = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $user = User::where("email", $input["email"])->first();

        if (Auth::attempt($input)) {
            $token = $user->createToken("token")->plainTextToken;

            return response()->json([
                "code" => 200,
                "status" => "success",
                "message" => "Berhasil Login",
                "token" => $token
            ]);
        } else {
            return response()->json([
                "code" => 401,
                "status" => "error",
                "message" => "Gagal Login"
            ]);
        }
    }
}
