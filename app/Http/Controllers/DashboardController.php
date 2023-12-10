<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // jika pakai query builder
use Illuminate\Database\Eloquent\Model; //jika pakai eloquent
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Donasi;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDonasi = DB::table('tb_donasi')->count();
        $totalPenerima = DB::table('users')
            ->where('role', 'Penerima')
            ->count();
        $totalDonatur = DB::table('users')
            ->where('role', 'Donatur')
            ->count();

        return view(
            'admin.dashboard',
            compact(
                'totalDonasi',
                'totalPenerima',
                'totalDonatur',
            )
        );
    }
}
