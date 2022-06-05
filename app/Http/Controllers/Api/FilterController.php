<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\House;
use Carbon\Carbon;

class FilterController extends Controller
{
    public function index($room_num, $beds_num, $servicesFilter = []){

      $houses = House::with(['user', 'position', 'messages', 'services', 'visualizations'])
      // ->join('house_service', 'house_service.house_id', '=', 'houses.id')
      ->where([
         ['room_num', '>=', $room_num],
         ['houses.beds_num','>=', $beds_num],
         // [TODO] DA SISTEMARE
         // [function($query) {
         //    if( isset( $servicesFilter ) && count( $servicesFilter ) > 0 ) {
         //       $house = House::where('id', 1)->first();
         //       $houseServices = $house->services;
         //       $houseServicesId = [];
         //       foreach ($houseServices as $el) {
         //          array_push($houseServicesId, $el->id);
         //       }
         //       // $houseServicesId contiene TUTTI gli elementi di $servicesFilter ?
         //       $query->where( count( array_diff($servicesFilter, $houseServicesId) ), 0);
         //    } 
         // }],
      ])
      ->get();

      return response()->json([
         'houses' => $houses,
         'success' => true
      ]);
    }
}