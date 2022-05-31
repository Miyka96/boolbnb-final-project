<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'latitude' => 'numeric',
            'longitude' => 'numeric', 
            'address' => 'required|string|min:5', 
            'city' => 'required|string|min:5', 
            'country' => 'required|string|min:5',
            'zip_code' => 'numeric|required|min:3',
         ]);

         $data = $request->all();
         $position= new Position($data);


        //  variables to save user input    
        $address = $request->input('address');
        $city = $request->input('city');
        $country = $request->input('country');


        // request http
        $response = Http::get("https://api.tomtom.com/search/2/geocode/$address.' '.$city.' '.$country.json?key=DINngHSiTz58Z5fDF5pThkg1IrJA87je&limit=5")->json();
        $arrayRes= $response;
        
        dd($arrayRes);
        if( $arrayRes['summary.totalResults']> 0 && ['results.0.matchConfidence.score'] >= 0.88) { 
            $position->latitude = $arrayRes['results.0.position.lat'];
            $position->longitude = $arrayRes['results.0.position.lon'];
            $position->fill($data);
            $position->save();
            $positionId = $position->id;
            return redirect()->route('user.houses.create')->with('message', 'Posizione appartamento registrata correttamente')->with('positionId', $positionId);
        }
        else{
            return redirect()->route('user.houses.create')->with('error','Indirizzo inserito non valido, controlla i dati inseriti');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Position $position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        //
    }
}
