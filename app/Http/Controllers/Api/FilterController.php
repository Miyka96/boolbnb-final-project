<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\House;

class FilterController extends Controller
{
    public function filteredHouses(){
        $houses = House::with(['position', 'user', 'messages', 'services', 'visualizations'])
         ->join('house_sponsorship', 'house_sponsorship.house_id', '=', 'houses.id')
         ->where([
            ['is_visible','=', 1],
            ['house_sponsorship.sponsor_start', '<=', Carbon::now()->toString()],
            ['house_sponsorship.sponsor_end', '<', Carbon::now()->toString()], // < perchè funziona al contrario, boh
         ])->get();


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