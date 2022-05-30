<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Psr\Http\Message\RequestInterface;

class Position extends Model
{
    public function houses(){
        return $this->hasMany('App\House');
    }

    protected $fillable = [
        'latitude',
        'longitude',
        'address',
        'city',
        'country',
        'zip_code'
     ];
}     
