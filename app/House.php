<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class House extends Model
{

   protected $fillable = [
      'title',
      'room_num',
      'beds_num',
      'toilets_num',
      'square_meters',
      'position_id',
      'image',
      'is_visible',
      'user_id',
      'cost_per_night'
   ];



   public function services() {
      return $this->belongsToMany('App\Service');
   }

   public function position(){
      return $this->belongsTo('App\Position');
   }

   public function visualizations(){
      return $this->hasMany('App\Visualization');
   }
   
   public function messages(){
      return $this->hasMany('App\Message');
   }

   public function user() {
      return $this->belongsTo('App\User');
   }
   public function sponsorships(){
      return $this->belongsToMany('App\Sponsorship');
   }
}
