<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login']);

Route::middleware('auth_sanctum')->group(function () {
    Route::post('/logout', [AuthController::class,'logout'])->middleware('auth:sanctum');
});