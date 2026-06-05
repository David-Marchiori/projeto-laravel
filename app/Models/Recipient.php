<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;


use Illuminate\Database\Eloquent\Model;

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

class Recipient extends Model
{
    //
}
