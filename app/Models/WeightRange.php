<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'weight_range_initial',
    'weight_range_final',
    'delivery_price',
    'region_id'
])]

class WeightRange extends Model
{
    public function Region()
    {
        return $this->belongsTo(Region::class);
    }
}
