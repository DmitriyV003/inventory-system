<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'parent_id' => ['required'],
            'type' => ['required'],
            'company_id' => ['required', 'integer'],
            'is_return' => ['required'],
            'is_replenish' => ['required'],
        ];
    }
}
