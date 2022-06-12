<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HouseSponsorshipController extends Controller
{
    public function make(Request $request){
        $house_id= 2;
        $sponsorship_id= 1;
        $sponsor_start= Carbon::now();
        $sponsor_end= Carbon::now()->addDay();
       
        DB::table('house_sponsorship')->insert([
            'house_id' => $house_id,
            'sponsorship_id' => $sponsorship_id,
            'sponsor_start' => $sponsor_start,
            'sponsor_end' => $sponsor_end,
        ]);
    }
}
