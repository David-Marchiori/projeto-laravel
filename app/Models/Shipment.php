<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'origin_postal_code',
        'origin_street',
        'destination_postal_code',
        'destination_street',
        'weight_kg',
        'status',
    ];
}
