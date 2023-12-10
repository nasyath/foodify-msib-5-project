<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donatur;
use App\Models\Penerima;
use Illuminate\Support\Facades\View;

class ProfilController extends Controller
{

    public function index()
    {
        $current_userid = auth()->user()->id;
        $userinfo = User::find($current_userid);
        $userProfile = $userinfo->role === 'Admin' ? $userinfo : $userinfo->load('Donatur', 'Penerima');

        \Log::info('User Info:', $userinfo->toArray());

        // Gunakan View::share untuk berbagi data ke view
        view()->share('userProfile', $userProfile);
        view()->share('userinfo', $userinfo);

        return view('profil.index', compact('userProfile', 'userinfo'));
    }
    
}
