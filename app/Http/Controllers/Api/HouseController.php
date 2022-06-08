<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\House;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class HouseController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index($paginate, $sponsored_only, $room_num, $beds_num)
  {  
    $now = Carbon::now()->addHours(2); // GMT +2

    // Mostra SOLO le sponsorizzate
    if($sponsored_only == 'true') { 
      $houses = House::with(['position', 'user', 'messages', 'services', 'visualizations'])
      ->join('house_sponsorship', 'house_sponsorship.house_id', '=', 'houses.id')
      ->where([
          ['is_visible','=', 1],
          ['house_sponsorship.sponsor_start', '<=', $now],
          ['house_sponsorship.sponsor_end', '>', $now],
      ])
      ->paginate($paginate);

      if( $houses ) {
        return response()->json([
            'houses' => $houses,
            'success' => true
        ]);
      }

      // Mostra TUTTE le case in ordine (prima sponsorizzate)
    } else { // filtro senza posizione

      $sponsored_houses = House::with(['position', 'user', 'messages', 'services', 'visualizations'])
      ->join('house_sponsorship', 'house_sponsorship.house_id', '=', 'houses.id')
      ->where([
          ['is_visible','=', 1],
          ['room_num', '>=', $room_num],
          ['beds_num','>=', $beds_num],
          ['house_sponsorship.sponsor_start', '<=', $now],
          ['house_sponsorship.sponsor_end', '>', $now],
      ])
      ->get();

      $sponsored_houses_id = House::select('id')
      ->join('house_sponsorship', 'house_sponsorship.house_id', '=', 'houses.id')
      ->where([
          ['is_visible','=', 1],
          ['room_num', '>=', $room_num],
          ['beds_num','>=', $beds_num],
          ['house_sponsorship.sponsor_start', '<=', $now],
          ['house_sponsorship.sponsor_end', '>', $now],
      ])
      ->get()->toArray();

      $array = [Arr::flatten($sponsored_houses_id)];

      $not_sponsored_houses = House::select('houses.*')
      ->with(['position', 'user', 'messages', 'services', 'visualizations'])
      ->join('house_sponsorship', 'house_sponsorship.house_id', '=', 'houses.id')
      ->groupBy('houses.id')
      ->where([
        ['is_visible','=', 1],
        ['room_num', '>=', $room_num],
        ['beds_num','>=', $beds_num],
      ])
      ->whereNotIn('id', $array[0])
      ->get();
      
      $houses = $sponsored_houses->merge($not_sponsored_houses);

      if(  $houses ) {
        return response()->json([
            'houses' =>  $houses,
            'success' => true
        ]);
      }
    }

    // ERRORE
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
