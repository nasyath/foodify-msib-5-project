<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donatur;

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
        // Get all data from model donatur with limit 6 data
        $donatur = Donatur::limit(6)->get();
        return view('landingpage.mitra', compact('donatur'));
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
