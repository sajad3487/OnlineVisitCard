<?php

namespace Modules\Card\Entities;

use Illuminate\Database\Eloquent\Model;

class landingLog extends Model
{
    protected $fillable = [
        'landing_id',
        'click',
        'download',
        'facebook',
        'twitter',
        'linkedin',
        'skype',
        'whatsapp',
        'instagram',
        'personal_website',
        'work_website',
    ];
}
