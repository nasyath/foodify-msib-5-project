<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin-dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Override the redirectTo method to customize based on user role
    // protected function redirectTo()
    // {
    //     if (Auth::user()->role == 'Admin') {
    //         return 'admin.dashboard';
    //     } elseif (Auth::user()->role == 'Donatur') {
    //         return 'donatur.dashboard';
    //     } elseif (Auth::user()->role == 'Penerima') {
    //         return 'penerima.dashboard';
    //     }
    // }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'Admin') {
            return redirect('/admin-dashboard')->with('success-login', 'Successfully logged in admin');
        } elseif ($user->role === 'Donatur') {
            return redirect('/donatur-dashboard')->with('success-login', 'Successfully logged in donatur');
        } elseif ($user->role === 'Penerima') {
            return redirect('/penerima-dashboard')->with('success-login', 'Successfully logged in penerima');
        } else {
            return redirect('/home'); // Redirect default jika peran tidak dikenali
        }
    }
}
