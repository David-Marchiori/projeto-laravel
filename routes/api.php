<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\SenderController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/shipments', ShipmentController::class);
    Route::apiResource('/senders', SenderController::class);
    Route::apiResource('/recipients', RecipientController::class);

    Route::post('/logout', [AuthController::class, 'logout']);
});