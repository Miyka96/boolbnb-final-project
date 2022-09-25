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
  public function index()
  {  
    $houses = House::with(['position'])->get(); // [TODO] aggiungere limite di casa ricevute

    return view('user.house-index', compact('houses'));
  }

  public function create() // public function create(House $house)
  {
    // services query
    $services = Service::orderBy('name')->get();

    return view('user.house-create', compact('services'));
  }

  public function store(Request $request)
  {
    // validations
    $validated = $request->validate([
        'title' => 'required|string|min:5|max:255',
        'room_num' => 'required|numeric|min:1', // [TODO] serve il max?
        'beds_num' => 'required|numeric|min:1',  // [TODO] serve il max?
        'toilets_num' => 'required|numeric|min:1',  // [TODO] serve il max?
        'square_meters' => 'required|numeric|min:20',  
        'image' => 'nullable|file|mimes:jpeg,jpg,png,webp',
        'is_visible' => 'boolean',
        'user_id' => 'required',
        'cost_per_night' => 'required|numeric|min:10|max:1000' 
    ]);

    // instantiate Position
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

    // recall form data
    $data = $request->all();

    // instantiate House
    $house = new House();
    $house->position_id= $position->id;
    $house->fill($data);
    $house->save();

    // link existing services to House
    if(array_key_exists('services', $validated)) {
        $house->services()->sync($validated['services']);
    } else {
        $house->services()->sync([]);
    }

    // [TODO] add feedback message for the user

    return redirect()->route('user.houses.index');
  }


  public function show(House $house)
  {
    return view('user.house-show', compact('house'));
  }


  public function edit(House $house)
  {
    // check if house belongs to the logged user
    if ($house->user_id != Auth::id()) {
      return redirect()->route('user.houses.index');
    }

    // services query
    $services = Service::orderBy('name')->get();

    return view('user.house-edit', compact(['services','house']));
  }


  public function update(Request $request, House $house)
  {
    // validations
    $validated = $request->validate([
        'title' => 'required|string|min:5|max:255',
        'room_num' => 'required|numeric|min:1',  // [TODO] serve il max?
        'beds_num' => 'required|numeric|min:1',  // [TODO] serve il max? 
        'toilets_num' => 'required|numeric|min:1',  // [TODO] serve il max? 
        'square_meters' => 'required|numeric|min:20',  
        'position_id' => 'required|exists:positions,id',
        'image' => 'nullable|file|mimes:jpeg,jpg,png,webp',
        'is_visible' => 'required|boolean', 
        'user_id' => 'required|exists:users,id',
        'cost_per_night' => 'required|numeric|min:10|max:1000'
    ]);

    // recall form data
    $data = $request->all();

    // link existing services to House
    if(array_key_exists('services', $validated)) {
      $house->services()->sync( $validated['services'] );
    } else {
      $house->services()->sync([]);
    }

    // link existing services to House
    if(array_key_exists('image', $validated) ) { // [TODO] che fa di preciso? Serve anche nello store?
        $image_path= Storage::put('uploads', $validated['image']);
        $validate['image'] = $image_path;
    }
    else{
        $image_path= $house['image'];
        $validate['image'] = $image_path;
    }

    // update House data
    $house->update( $validate );

    // [TODO] add feedback message for the user

    return redirect()->route('user.houses.index');
  }


  public function destroy(House $house)
  {
    $house->delete();

    // [TODO] add feedback message for the user

    return redirect()->route('user.houses.index');
  }
}
