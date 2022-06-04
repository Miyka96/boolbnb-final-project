<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\House;
use Carbon\Carbon;

class FilterController extends Controller
{
    public function filteredHouses(){
        $rooms = 1;
        $houses = House::with(['position', 'user', 'messages', 'services', 'visualizations'])
         ->where([
            'room_num' == $rooms
         ]);


      if( $houses ) {
         return response()->json([
            'houses' => $houses,
            'success' => true
         ]);
      }

      return response()->json([
         'message' => 'Houses not found',
         'success' => false
      ], 404);
    }
}