<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SerialNumber extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'internal_reference',
        'company_id',
        'product_attribute_value_id',
    ];
}
