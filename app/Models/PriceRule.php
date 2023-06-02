<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriceRule extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'applied_on',
        'min_quantity',
        'price',
        'start_date',
        'end_date',
        'company_id',
        'product_attribute_value_id',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
