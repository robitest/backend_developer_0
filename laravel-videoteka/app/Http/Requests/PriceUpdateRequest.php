<?php

namespace App\Http\Requests;

use App\Models\Price;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PriceUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Price $price): array
    {
        return [
            'type' => ['required', 'string', Rule::unique('prices')->ignore($price)],
            'price' => ['required', 'numeric', 'gt:0'],
            'late_fee' => ['required', 'numeric', 'gt:0'],
        ];
    }
}
