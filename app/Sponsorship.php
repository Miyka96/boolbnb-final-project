<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    public function house() {
        return $this->belongsToMany('App\House');
    }
}
