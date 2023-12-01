<?php

use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\JMakananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// ==========================================
// ADMIN
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


// ==========================================
// DONATUR
Route::get('/donatur-dashboard', function () {
    return view('donatur.dashboard');
})->name('donatur.dashboard');

Route::get('/donatur-eksplor', function () {
    return view('donatur.eksplor');
})->name('eksplor');

Route::get('/donatur-detail_penerima', function () {
    return view('donatur.detail_penerima');
})->name('detail_penerima');

Route::get('/donatur-form_donasi', function () {
    return view('donatur.form_donasi');
})->name('form_donasi');

Route::get('/donatur-proses_donasi', function () {
    return view('donatur.proses_donasi');
})->name('proses_donasi');

// ==========================================
// PENERIMA
Route::get('/penerima-dashboard', function () {
    return view('penerima.dashboard');
})->name('penerima.dashboard');

// ==========================================
Route :: resource('/jenis_makanan',JMakananController::class);

Route :: resource('/donasi',DonasiController::class);
// Auth::routes();
 