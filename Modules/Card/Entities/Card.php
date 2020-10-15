<?php

namespace Modules\Card\Entities;

use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'tel',
        'email',
        'position',
        'company_name',
        'logo',
        'status',
    ];
}
