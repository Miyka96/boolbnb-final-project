<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\House;
use Carbon\Carbon;

class FilterController extends Controller
{
    public function index(Request $request){
      $fullHouses = House::with(['position','messages','services','visualizations'])->get();
      $rooms = $request->rooms;
      $beds = $request->beds;
      $toilets= $request->toilets;

        $houses = House::with(['position', 'messages', 'services', 'visualizations'])
         ->where([
            ['room_num','=', $rooms],
            ['beds_num','=', $beds],
            ['toilets_num','=', $toilets],
         ])
         ->get();


      if( $houses ) {
         return response()->json([
            'houses' => $houses,
            'success' => true
         ]);
      }

      else{
         return response()->json([
            'fullHouses'=> $fullHouses,
            'success' => true
         ]);
      }
    }
}