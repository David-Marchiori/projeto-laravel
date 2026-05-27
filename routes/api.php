<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShipmentController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);

Route::get('/shipments', [ShipmentController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/shipments', [ShipmentController::class, 'store']);
    Route::post('/logout', [AuthController::class, 'logout']);
});