<?php

use App\Http\Controllers\ShipmentController;
use Illuminate\Support\Facades\Route;

Route::get('/shipments', [ShipmentController::class, 'index']);

Route::post('/shipments', [ShipmentController::class, 'store']);