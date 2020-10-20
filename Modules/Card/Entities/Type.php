<?php

namespace Modules\Card\Entities;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'status',
    ];
}
