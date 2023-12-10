<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\JMakananController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\DonasiPenerimaController;
use App\Http\Controllers\HistoryDonasiController;
use App\Http\Controllers\KelolaUsersController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Donasi;

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


// Route get '/' to LandingController@index
Route::get('/', [LandingController::class, 'index'])->name('landingpage');
Route::get('/tentang-kami', [LandingController::class, 'tentang'])->name('tentang');
Route::get('/mitra', [LandingController::class, 'mitra'])->name('mitra');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/profil', function () {
    return view('themes.profil');
})->name('profil');

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


Route::get('/donatur-form_donasi', function () {
    return view('donatur.form_donasi');
})->name('form_donasi2');

Route::get('/donatur-proses_donasi', function () {
    return view('donatur.proses_donasi');
})->name('proses_donasi');

// ==========================================
// PENERIMA
Route::get('/penerima-dashboard', function () {
    return view('penerima.dashboard');
})->name('penerima.dashboard');



// Contoh penggunaan middleware untuk donatur
Route::middleware(['auth', 'role:Donatur'])->group(function () {
    Route::get('/eksplorasi-penerima', [DonasiController::class, 'eksplorasi'])->name('eksplorasi_penerima');
    Route::get('/detail-penerima/{id}', [DonasiController::class, 'show'])->name('detail_penerima');
    Route::get('/form-donasi-makanan/{id}', [DonasiController::class, 'create'])->name('form_donasi');
    Route::get('/donatur-proses-donasi', [DonasiController::class, 'index'])->name('proses_donasi');
    Route::post('/submit-donasi', [DonasiController::class, 'store'])->name('submit_donasi');
    Route::delete('/delete-donasi/{id}', [DonasiController::class, 'destroy'])->name('delete_donasi');
    Route::get('/edit-donasi/{id}', [DonasiController::class, 'edit'])->name('edit_donasi');
    Route::put('/update-donasi/{id}', [DonasiController::class, 'update'])->name('update_donasi');
});

// Contoh penggunaan middleware untuk penerima
Route::middleware(['auth', 'role:Penerima'])->group(function () {
    Route::get('/proses-donasi-penerima', [DonasiPenerimaController::class, 'index'])->name('proses_donasi_penerima');
    Route::get('/detail-donasi/{id}', [DonasiPenerimaController::class, 'show'])->name('detail_donasi_penerima');
    Route::get('/terima-donasi/{id}', [DonasiPenerimaController::class, 'terimaDonasi'])->name('terima_donasi');
    Route::get('/tolak-donasi/{id}', [DonasiPenerimaController::class, 'tolakDonasi'])->name('tolak_donasi');
});



// ==========================================
Route :: resource('/kelola_jenis_makanan',JMakananController::class)->middleware('auth');

Route :: resource('/kelola_users',KelolaUsersController::class)->middleware('auth');

Route :: resource('/history_donasi',HistoryDonasiController::class)->middleware('auth');
Route::get('/history_donasi/{id}', [HistoryDonasiController::class, 'show'])->name('history_donasi.show')->middleware('auth');

Route :: resource('/donasi',DonasiController::class)->middleware('auth');

Route :: resource('/donatur',DonaturController::class)->middleware('auth');

Route :: resource('/penerima',PenerimaController::class)->middleware('auth');

// web.php
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
