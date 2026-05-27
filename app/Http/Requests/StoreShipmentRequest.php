<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreShipmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'origin_postal_code'      => 'required|string|min:8|max:9',
            'origin_street'           => 'required|string|max:255',
            'destination_postal_code' => 'required|string|min:8|max:9',
            'destination_street'      => 'required|string|max:255',
            'weight_kg'               => 'required|numeric|gt:0',
        ];
    }
}
