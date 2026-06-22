<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShipmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
        'origin_postal_code'      => 'required|string|size:9',
        'destination_postal_code' => 'required|string|size:9',
        'destination_street'      => 'required|string|max:255',
        'weight_kg'               => 'required|numeric|gt:0',
        'width'                   => 'required|numeric|gt:0',
        'height'                  => 'required|numeric|gt:0',
        'length'                  => 'required|numeric|gt:0',
        ];
    }
}