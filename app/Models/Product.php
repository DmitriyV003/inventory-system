<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sale_price',
        'unit_of_measure_id',
        'purchase_unit_of_measure_id',
        'can_be_sold',
        'can_be_purchased',
        'can_be_expensed',
    ];

    protected $casts = [
        'can_be_sold' => 'boolean',
        'can_be_purchased' => 'boolean',
        'can_be_expensed' => 'boolean',
    ];
}
