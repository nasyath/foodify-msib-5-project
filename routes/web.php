<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/proses_donasi', function () {
    return view('proses_donasi');
})->name('proses_donasi');

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

Route::get('/eksplor', function () {
    return view('donatur.eksplor');
})->name('eksplor');

Route::get('/detail_penerima', function () {
    return view('donatur.detail_penerima');
})->name('detail_penerima');

Route::get('/form_donasi', function () {
    return view('donatur.form_donasi');
})->name('form_donasi');

// ==========================================
// PENERIMA
Route::get('/penerima-dashboard', function () {
    return view('penerima.dashboard');
})->name('penerima.dashboard');



