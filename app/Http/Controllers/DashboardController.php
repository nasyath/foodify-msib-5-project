<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // jika pakai query builder
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function indexAdmin()
    {
        $userId = Auth::id();

        $totalDonasi = DB::table('tb_donasi')->count();
        $totalPenerima = DB::table('users')
            ->where('role', 'Penerima')
            ->count();
        $totalDonatur = DB::table('users')
            ->where('role', 'Donatur')
            ->count();
        $totalPending = DB::table('tb_donasi')
            ->where('status', 'Pending')
            ->count();
        $totalDiterima = DB::table('tb_donasi')
            ->where('status', 'Diterima')
            ->count();
        $totalDitolak = DB::table('tb_donasi')
            ->where('status', 'Ditolak')
            ->count();

        // Data untuk Pie Chart (distribusi status donasi)
        $pieChartData = [
            'labels' => ['Diterima', 'Ditolak', 'Pending'],
            'data' => [$totalDiterima, $totalDitolak, $totalPending],
            'backgroundColor' => [
                'rgba(99, 173, 111, 0.5)',
                'rgba(245, 110, 110, 0.5)',
                'rgba(162, 162, 162, 0.5)',
            ],
            'borderColor' => [
                'rgba(99, 173, 111, 1)',
                'rgba(245, 110, 110, 1)',
                'rgba(162, 162, 162, 1)',
            ],
        ];

        $labels = ['Penerima', 'Donatur'];
        $data = [
            $totalPenerima,
            $totalDonatur,
        ];
        $backgroundColor = [
            'rgba(249, 194, 86, 0.5)',
            'rgba(54, 162, 235, 0.5)',
        ];
        $borderColor = [
            'rgba(249, 194, 86, 1)',
            'rgba(54, 162, 235, 1)',
        ];
    
        $barChartData = [
            'labels' => $labels,
            'data' => $data,
            'backgroundColor' => $backgroundColor,
            'borderColor' => $borderColor,
        ];

        return view(
            'admin.dashboard',
            compact(
                'totalDonasi',
                'totalPenerima',
                'totalDonatur',
                'totalPending',
                'totalDiterima',
                'totalDitolak',
                'pieChartData',
                'barChartData'
            )
        );
    }

    public function indexDonatur()
    {
        $userId = Auth::id();

        $totalDonasi = DB::table('tb_donasi')
            ->join('tb_donatur', 'tb_donasi.id_donatur', '=', 'tb_donatur.id')
            ->where('tb_donatur.users_id', $userId)
            ->count();

        $totalDiterima = DB::table('tb_donasi')
            ->join('tb_donatur', 'tb_donasi.id_donatur', '=', 'tb_donatur.id')
            ->where('tb_donatur.users_id', $userId)
            ->where('tb_donasi.status', 'Diterima')
            ->count();

        $totalDitolak = DB::table('tb_donasi')
            ->join('tb_donatur', 'tb_donasi.id_donatur', '=', 'tb_donatur.id')
            ->where('tb_donatur.users_id', $userId)
            ->where('tb_donasi.status', 'Ditolak')
            ->count();

        $totalPending = DB::table('tb_donasi')
            ->join('tb_donatur', 'tb_donasi.id_donatur', '=', 'tb_donatur.id')
            ->where('tb_donatur.users_id', $userId)
            ->where('tb_donasi.status', 'Pending')
            ->count();

        // Data untuk Pie Chart (distribusi status donasi)
        $pieChartData = [
            'labels' => ['Diterima', 'Ditolak', 'Pending'],
            'data' => [$totalDiterima, $totalDitolak, $totalPending],
            'backgroundColor' => [
                'rgba(99, 173, 111, 0.5)',
                'rgba(245, 110, 110, 0.5)',
                'rgba(162, 162, 162, 0.5)',
            ],
            'borderColor' => [
                'rgba(99, 173, 111, 1)',
                'rgba(245, 110, 110, 1)',
                'rgba(162, 162, 162, 1)',
            ],
        ];

        return view(
            'donatur.dashboard',
            compact('totalDonasi', 'totalDitolak', 'totalDiterima', 'totalPending','pieChartData',)
        );
    }

    public function indexPenerima()
    {
        $userId = Auth::id();

        $totalDonasi = DB::table('tb_donasi')
            ->join('tb_penerima', 'tb_donasi.id_penerima', '=', 'tb_penerima.id')
            ->where('tb_penerima.users_id', $userId)
            ->count();

        $totalDiterima = DB::table('tb_donasi')
            ->join('tb_penerima', 'tb_donasi.id_penerima', '=', 'tb_penerima.id')
            ->where('tb_penerima.users_id', $userId)
            ->where('tb_donasi.status', 'Diterima')
            ->count();

        $totalDitolak = DB::table('tb_donasi')
            ->join('tb_penerima', 'tb_donasi.id_penerima', '=', 'tb_penerima.id')
            ->where('tb_penerima.users_id', $userId)
            ->where('tb_donasi.status', 'Ditolak')
            ->count();

        $totalPending = DB::table('tb_donasi')
            ->join('tb_penerima', 'tb_donasi.id_penerima', '=', 'tb_penerima.id')
            ->where('tb_penerima.users_id', $userId)
            ->where('tb_donasi.status', 'Pending')
            ->count();
        
        
        // Data untuk Pie Chart (distribusi status donasi)
        $pieChartData = [
            'labels' => ['Diterima', 'Ditolak', 'Pending'],
            'data' => [$totalDiterima, $totalDitolak, $totalPending],
            'backgroundColor' => [
                'rgba(99, 173, 111, 0.5)',
                'rgba(245, 110, 110, 0.5)',
                'rgba(162, 162, 162, 0.5)',
            ],
            'borderColor' => [
                'rgba(99, 173, 111, 1)',
                'rgba(245, 110, 110, 1)',
                'rgba(162, 162, 162, 1)',
            ],
        ];


        return view(
            'penerima.dashboard',
            compact('totalDonasi', 'totalDitolak', 'totalDiterima', 'totalPending','pieChartData',)
        );
    }
}
