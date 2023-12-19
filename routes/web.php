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
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

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

// ==========================================
// ADMIN
// Route::get('/admin-dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');


Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin-dashboard', [DashboardController::class, 'indexAdmin'])->name('admin.dashboard')->middleware('auth');
    Route::get('/history_donasi', [HistoryDonasiController::class, 'index']);
    Route::get('/history_donasi/{id}', [HistoryDonasiController::class, 'show'])->name('history_donasi.show');
    Route::get('/generate-pdf-admin', [HistoryDonasiController::class, 'generatePDF'])->middleware('auth'); //tes PDF
    Route::get('/admin-history-pdf', [HistoryDonasiController::class, 'historyPDF'])->middleware('auth');
    Route::get('/admin-history-excel', [HistoryDonasiController::class, 'historyExcel'])->middleware('auth');
    Route::get('/form-akun', [KelolaUsersController::class, 'form_akun'])->name('form_akun');

    Route::post('/tambah-akun', [KelolaUsersController::class, 'tambah_akun'])->name('tambah_akun');

    Route::get('/form-edit-akun/{id}', [KelolaUsersController::class, 'form_edit_akun'])->name('form_edit_akun');

    Route::put('/edit_akun/{id}', [KelolaUsersController::class, 'edit_akun'])->name('edit_akun');

    Route::resource('/kelola_jenis_makanan', JMakananController::class)->middleware('auth');
    Route::resource('/kelola_users', KelolaUsersController::class)->middleware('auth');
});

// ==========================================
// DONATUR
Route::get('/donatur-dashboard', [DashboardController::class, 'indexDonatur'])->name('donatur.dashboard')->middleware('auth');
Route::middleware(['auth', 'role:Donatur'])->group(function () {
    Route::get('/eksplorasi-penerima', [DonasiController::class, 'eksplorasi'])->name('eksplorasi_penerima');
    Route::get('/detail-penerima/{id}', [DonasiController::class, 'show'])->name('detail_penerima');
    Route::get('/form-donasi-makanan/{id}', [DonasiController::class, 'create'])->name('form_donasi');
    Route::get('/donatur-proses-donasi', [DonasiController::class, 'index'])->name('proses_donasi');
    Route::get('/donatur-detail-donasi/{id}', [DonasiController::class, 'showDetail'])->name('detail_donasi_donatur');
    Route::get('/history-donasi-donatur', [DonasiController::class, 'history'])->name('history_donasi_donatur');
    Route::post('/submit-donasi', [DonasiController::class, 'store'])->name('submit_donasi');
    Route::delete('/delete-donasi/{id}', [DonasiController::class, 'destroy'])->name('delete_donasi');
    Route::get('/edit-donasi/{id}', [DonasiController::class, 'edit'])->name('edit_donasi');
    Route::put('/update-donasi/{id}', [DonasiController::class, 'update'])->name('update_donasi');
    Route::get('/donatur-history-pdf', [DonasiController::class, 'historyPDF'])->middleware('auth');
    Route::get('/donatur-history-excel', [DonasiController::class, 'historyExcel'])->middleware('auth');
});

// ==========================================
// PENERIMA
Route::get('/penerima-dashboard', [DashboardController::class, 'indexPenerima'])->name('penerima.dashboard')->middleware('auth');
Route::middleware(['auth', 'role:Penerima'])->group(function () {
    Route::get('/proses-donasi-penerima', [DonasiPenerimaController::class, 'index'])->name('proses_donasi_penerima');
    Route::get('/detail-donasi/{id}', [DonasiPenerimaController::class, 'show'])->name('detail_donasi_penerima');
    Route::get('/terima-donasi/{id}', [DonasiPenerimaController::class, 'terimaDonasi'])->name('terima_donasi');
    Route::get('/tolak-donasi/{id}', [DonasiPenerimaController::class, 'tolakDonasi'])->name('tolak_donasi');
    Route::get('/history-donasi-penerima', [DonasiPenerimaController::class, 'history'])->name('history_donasi_penerima');
    Route::get('/generate-pdf', [DonasiPenerimaController::class, 'generatePDF'])->middleware('auth');
    Route::get('/penerima-history-pdf', [DonasiPenerimaController::class, 'historyPDF'])->middleware('auth');
    Route::get('/penerima-history-excel', [DonasiPenerimaController::class, 'historyExcel'])->middleware('auth');
    Route::get('/open-status', [ProfilController::class, 'openStatus'])->name('open.status')->middleware('auth');
    Route::get('/close-status', [ProfilController::class, 'closeStatus'])->name('close.status')->middleware('auth');
});

// ==========================================
Route::get('/kelola_users', [KelolaUsersController::class, 'index'])->name('admin.kelola_users')->middleware('role:Admin');;

Route::resource('/donasi', DonasiController::class)->middleware('auth');

Route::resource('/donatur', DonaturController::class)->middleware('auth');

Route::resource('/penerima', PenerimaController::class)->middleware('auth');

// web.php

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
