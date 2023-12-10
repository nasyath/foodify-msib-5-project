<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JMakananController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;

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

// === Rest API ===
Route::get('/api-jmakanan', [JMakananController::class, 'apiJMakanan']);

// ---- Auth Api ----
Route::post('/api-register', [AuthController::class, 'register']);
Route::post('/api-login', [AuthController::class, 'login']);

