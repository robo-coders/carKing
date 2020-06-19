<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    protected $table = 'user_infos';
    protected $fillable = [
        'user_id', 'referral_id',
    ];
   
}
