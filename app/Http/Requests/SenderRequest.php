<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SenderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:255',
            'tax_document' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'zip_code' => 'required|string|max:10',
            'street_number' => 'required|string|max:10',
            'street' => 'required|string|max:255',
            'neighborhood' => 'required|string|max:255',
            'complement' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
        ];
    }
}