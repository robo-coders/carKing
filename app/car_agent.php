<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car_agent extends Model
{
    public function cars(){
    	$this->belongsTo(car::class);
    }
}
