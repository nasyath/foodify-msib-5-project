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

Route::get('/eksplor', function () {
    return view('eksplor');
})->name('eksplor');
Route::get('/detail_penerima', function () {
    return view('detail_penerima');
})->name('detail_penerima');
Route::get('/form_donasi', function () {
    return view('form_donasi');
})->name('form_donasi');
Route::get('/proses_donasi', function () {
    return view('proses_donasi');
})->name('proses_donasi');
