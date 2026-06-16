<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'zip_code' => 'required|string',
            'length' => 'required|numeric|min:1',
            'width'  => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1',
            'weight' => 'required|numeric|min:1',
        ];
    }
}
