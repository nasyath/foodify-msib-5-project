<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    // Beranda (Landing Page)
    public function index()
    {
        return view('landingpage.beranda');
    }

    // Tentang Kami
    public function tentang()
    {
        return view('landingpage.tentang');
    }

    // Mitra
    public function mitra()
    {
        return view('landingpage.mitra');
    }

    // Register (redirect to register page)
    public function register()
    {
        return redirect()->route('register');
    }

    // Login (redirect to login page)
    public function login()
    {
        return redirect()->route('login');
    }
}
