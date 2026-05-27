<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Http\Requests\StoreShipmentRequest;

class ShipmentController extends Controller
{
    public function index() {
        $shipments = Shipment::all();
        return response()->json($shipments, 200);
    }

    public function store(StoreShipmentRequest $request) {
        $shipment = Shipment::create($request->validated());
        return response()->json($shipment, 201);
    }
}
       