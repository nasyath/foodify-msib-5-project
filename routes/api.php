<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JenisMakananController;
use App\Http\Controllers\Api\AuthController;

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

Route::middleware('auth:sanctum')->group(function () {
    // For API Jenis Makanan
    Route::get('/jenis-makanan', [JenisMakananController::class, 'index']);
    Route::get('/jenis-makanan/{id}', [JenisMakananController::class, 'show']);
    Route::post('/jenis-makanan-store', [JenisMakananController::class, 'store']);
    Route::put('/jenis-makanan/{id}', [JenisMakananController::class, 'update']);
    Route::delete('/jenis-makanan/{id}', [JenisMakananController::class, 'destroy']);

});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
