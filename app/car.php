<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $table = "cars";

    public function users(){
        return $this->belongsToMany('App\user');
    }
}
