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

    public function geocoder(Request $request){
        $address = $request->input('address');
        $city = $request->input('city');
        $country = $request->input('country');

        // chiamata per geocoding tomtom ?! ps. il tutto è stato preso da postman, non giudicatemi
            $client = new Client();
            $request = new Request(["'GET', 'https://api.tomtom.com/search/2/geocode/.$address .$city .$country .json?key=DINngHSiTz58Z5fDF5pThkg1IrJA87je&limit=1'"]);
            $res = $client->sendAsync($request)->wait();
            echo $res->getBody();

            $latitude = $res->position->lat;
            $longitude= $res->position->lon; 


            return compact('latitude', 'longitude');

            // questa cosa è un prototipo, non so bene cosa ho fatto però boh è mezzanotte, pietà
    }
}     
