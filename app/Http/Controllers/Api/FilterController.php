<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\House;
use Carbon\Carbon;

class FilterController extends Controller
{
    public function index(Request $request){
      $rooms = $request->rooms;
      $beds = $request->beds;
      $service= $request->service;
      $singleService= "";
      foreach($service as $el){
         $singleService =$el;
      }

        $houses = House::with(['position', 'messages', 'services', 'visualizations'])

        ->join('house_service', 'house_service.house_id', '=', 'houses.id')
        ->where([
            ['room_num','>', $rooms],
            ['beds_num','>', $beds],
            [ 'house_service.service_id', '=', $singleService],
        ])
         ->get();

         return response()->json([
            'houses' => $houses,
            'success' => true
         ]);
    }
}