<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index() {
        $shipments = Shipment::all();
        return response()->json($shipments, 200);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'origin_postal_code' => 'required|string',
            'origin_street' => 'required|string',
            'destination_postal_code' => 'required|string',
            'destination_street' => 'required|string',
            'weight_kg' => 'required|numeric',
        ]);

        $shipment = Shipment::create($validatedData);
        return response()->json($shipment, 201);
    }
}