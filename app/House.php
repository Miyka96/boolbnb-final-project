<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
   public function services() {
      return $this->belongsToMany('App\Service');
   }

   public function messages(){
      return $this->hasMany('App\Message');
   }
}
