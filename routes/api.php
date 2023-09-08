<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorAuthController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// USER MANAGEMENT
Route::get('/users', [UserController::class, 'index'])->middleware('auth:sanctum');
Route::get('/users/{id}', [UserController::class, 'show'])->middleware('auth:sanctum');
Route::delete('/users/{id}/delete', [UserController::class, 'delete'])->middleware('auth:sanctum');
Route::put('/users/{id}/edit', [UserController::class, 'update'])->middleware('auth:sanctum');
// USER AUTH
Route::post('/sign-up', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
// VENDOR AUTH
Route::post('/vendors/join', [VendorAuthController::class, 'join'])->middleware('auth:sanctum');
Route::delete('/vendors/leave', [VendorAuthController::class, 'leave'])->middleware('auth:sanctum');
