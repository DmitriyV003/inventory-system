<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRuleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'applied_on' => ['required', 'integer'],
            'min_quantity' => ['nullable', 'integer'],
            'price' => ['nullable', 'integer'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date'],
            'company_id' => ['required', 'integer'],
        ];
    }
}
