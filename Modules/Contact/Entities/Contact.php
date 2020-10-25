<?php

namespace Modules\Contact\Entities;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
        'status',
    ];
}
