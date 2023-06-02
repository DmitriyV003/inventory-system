<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'parent_id',
        'type',
        'company_id',
        'is_return',
        'is_replenish',
    ];

    protected $casts = [
        'is_replenish' => 'boolean',
        'is_return' => 'boolean',
    ];
}
