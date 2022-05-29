<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function houses(){
        return $this->hasMany('App\House');
    }

    public function geocoder(){
        
    }
}
