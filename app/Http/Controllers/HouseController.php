<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use App\Service;
use App\Position;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HouseController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {  
      $houses = House::with(['position'])->get(); // magari aggiunger limit

      return view('user.houses', compact('houses')); // vista my-apartments
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(House $house)
   {

      $services = Service::orderBy('name')->get();

      return view('user.house-create', compact(['services','house'])); // ritorna vista con form creazione house
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $validated= $request->validate([
         'title' => 'required|string|min:5|max:255',
         'room_num' => 'required|numeric|min:1', // serve il max?
         'beds_num' => 'required|numeric|min:1',  // serve il max?
         'toilets_num' => 'required|numeric|min:1',  // serve il max?
         'square_meters' => 'required|numeric|min:20',  
         'image' => 'file|mimes:jpeg,jpg,png,webp',
         'is_visible' => 'boolean',
         'user_id' => 'required',
         'cost_per_night' => 'required|numeric|min:10|max:1000' 
      ]);

      $lat= $request->position_lat;
      $lon= $request->position_lon;
      $address= $request->position_address;
      $city= $request->position_city;
      $country= $request->position_country;
      $zipCode= $request->position_zip_code;
      $created_at= now();

      $position = Position::create([
          'latitude' => $lat,
          'longitude' => $lon,
          'address' => $address,
          'city' => $city,
          'country' => $country,
          'zip_code' => $zipCode,
          'created_at' => $created_at,
      ]);

      $data = $request->all();
      $house = new House();
      $house->position_id= $position->id;
      $house->fill( $data );

      if(array_key_exists('image', $validated)){
         $image_path = Storage::put('uploads', $validated['image']);
         $house->image = $image_path;
     }

      $house->save();

      if( array_key_exists('services', $data) ) {
         $house->services()->sync( $data['services'] );
      } else {
         $house->services()->sync([]);
      }

      return redirect()->route('user.houses.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\House  $house
    * @return \Illuminate\Http\Response
    */
    public function show(House $house)
    {
      //  return view('user.house-show', compact('house'));
    }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\House  $house
    * @return \Illuminate\Http\Response
    */
   public function edit(House $house)
   {

      if ($house->user_id != Auth::id()) return redirect()->route('user.houses.index');
      $services = Service::orderBy('name')->get();

      return view('user.house-edit', compact(['services','house'])); // ritorna vista con form modifica house
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\House  $house
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, House $house)
   {

      $request->validate([
         'title' => 'required|string|min:5|max:255',
         'room_num' => 'required|numeric|min:1', 
         'beds_num' => 'required|numeric|min:1',  
         'toilets_num' => 'required|numeric|min:1',  
         'square_meters' => 'required|numeric|min:20',  
         'position_id' => 'required|exists:positions,id',
         'image' => 'required|url',
         'is_visible' => 'required|boolean', 
         'user_id' => 'required|exists:users,id',
         'cost_per_night' => 'required|numeric|min:10|max:1000'
      ]);

      $data = $request->all();

      $house->update( $data );

      if( array_key_exists('services', $data) ) {
         $house->services()->sync( $data['services'] );
      } else {
         $house->services()->sync([]);
      }

      return redirect()->route('user.houses.index'); // aggiungere rotta dell'utente
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\House  $house
    * @return \Illuminate\Http\Response
    */
   public function destroy(House $house)
   {
      $house->delete();

      return redirect()->route('user.houses.index'); // aggiungere rotta dell'utente
   }
}
