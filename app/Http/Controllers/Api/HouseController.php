<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\House;

class HouseController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $houses = House::with(['position', 'user', 'messages', 'services', 'visualizations', 'sponsorships'])
         ->where('is_visible','=', 1)
         ->paginate(12);

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

   public function show(House $house)
   {
      $house->load(['messages', 'position', 'user', 'services', 'visualizations', 'sponsorships']);

      if( $house ) {
         return response()->json([
            'house' => $house,
            'success' => true
         ]);
      }

      return response()->json([
         'message' => 'House not found',
         'success' => false
      ], 404);      
   }
}
