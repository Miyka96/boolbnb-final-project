<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisualizationController extends Controller{

    public function send(Request $request){
        $ip= $request->ip();
        $house_id = $request->house_id;
        $date = now();
        $created_at= now();
    
        $add= DB::table('visualizations')->insert([
            'ip' => $ip,
            'house_id' => $house_id,
            'date' => $date,
            'created_at' => $created_at
        ]);
    
    }
}