<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'full_name',
    'tax_document',
    'email',
    'phone',
    'zip_code',
    'street_number',
    'street',
    'neighborhood',
    'complement',
    'city',
    'state',
])]

class Sender extends Model
{
    //
}
