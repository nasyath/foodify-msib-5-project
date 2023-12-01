<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Donatur;
use App\Models\Penerima;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;




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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string'], // Sesuaikan dengan kebutuhan validasi role
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
        'alamat' => 'required_if:role,penerima|string|max:255',
        'no_hp' => 'required|string|max:255',
        'deskripsi' => 'required_if:role,donatur|string|max:255',
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
            // Store the file and get the path
            $path = $request->file('foto')->store('backend/assets/images/users', 'public');
        } catch (\Exception $e) {
            return back()->withErrors(['foto' => $e->getMessage()])->withInput();
        }
    } else {
        // If no file is uploaded, set $path to null or any default value you want
        $path = null;
    }

    if ($data['role'] === 'donatur') {
        $donatur = Donatur::create([
            'id' => $user->id,
            'nama_donatur' => $data['name'],
            'alamat' => $data['alamat'],
            'no_hp' => $data['no_hp'],
            'deskripsi' => $data['deskripsi'],
            'foto' => $path,
        ]);
        $user->donatur_id = $donatur->id;
    } elseif ($data['role'] === 'penerima') {       
        $penerima = Penerima::create([
            'id' => $user->id,
            'nama_penerima' => $data['name'],
            'alamat' => $data['alamat'],
            'no_hp' => $data['no_hp'],
            'deskripsi' => $data['deskripsi'],
            'foto' => $path,
        ]);
        $user->penerima_id = $penerima->id;
    }

    $user->save();

    // Redirect to the home page or any other desired page
    return redirect()->route('login');
}

    
    
}
