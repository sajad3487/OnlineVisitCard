<?php

namespace Modules\Card\Entities;

use Illuminate\Database\Eloquent\Model;

class landing extends Model
{
    protected $fillable = [
        'card_id',
        'user_id',
        'type',
        'picture',
        'home_address',
        'work_address',
        'home_phone',
        'work_phone',
        'fax',
        'personal_website',
        'work_website',
        'facebook',
        'instagram',
        'twitter',
        'linkdin',
        'skype',
        'whatsapp',
    ];

    public function card (){
        return $this->belongsTo(card::class,'card_id','id');
    }
}
