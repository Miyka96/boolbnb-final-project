<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $lat= $request->lat;
        // $lon= $request->lon;
        // $address= $request->address;
        // $city= $request->city;
        // $country= $request->country;
        // $zipCode= $request->zipCode;
        // $created_at= now();

        // $add= DB::table('positions')->insert([
        //     'latitude' => $lat,
        //     'longitude' => $lon,
        //     'address' => $address,
        //     'city' => $city,
        //     'country' => $country,
        //     'zip_code' => $zipCode,
        //     'created_at' => $created_at,
        // ]);

        // $position = DB::table('positions')->orderBy('created_at', 'DESC')->first();

        // return $position;
    }

}
