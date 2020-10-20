<?php

namespace Modules\Card\Entities;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'landing_id',
        'ip',
    ];
}
