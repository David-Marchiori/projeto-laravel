<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'region_name',
    'region_zipcode_initial',
    'region_zipcode_final',
    'delivery_days'
])]

class Region extends Model
{
    public function WeightRange()
    {
        return $this->hasMany(WeightRange::class);
    }
}
