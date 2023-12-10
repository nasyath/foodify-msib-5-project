<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JenisMakananController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// For API Jenis Makanan
Route::get('/jenis-makanan', [JenisMakananController::class, 'index']);
Route::get('/jenis-makanan/{id}', [JenisMakananController::class, 'show']);
Route::post('/jenis-makanan-store', [JenisMakananController::class, 'store']);
