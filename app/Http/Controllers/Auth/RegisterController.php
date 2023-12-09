<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:donatur,penerima'], // Sesuaikan dengan kebutuhan validasi role
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // RegisterController.php

    public function register(Request $request)
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
    }
}