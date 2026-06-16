<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\SenderController;
use App\Http\Controllers\RecipientController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/shipments', ShipmentController::class);
    Route::apiResource('/senders', SenderController::class);
    Route::apiResource('/recipients', RecipientController::class);
    Route::post('/quotes', [QuoteController::class, 'calculate']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
