<?php

namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'section',
        'title',
        'file',
        'text',
        'button_text',
        'priority',
        'status',
    ];
}
