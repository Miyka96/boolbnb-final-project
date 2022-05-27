<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   public function house()
   {
      return $this->belongsTo('App\House');
   }

   protected $fillable = [
      'name',
      'email',
      'telephone',
      'content',
      'sent_at',
      'is_read',
   ];
}
