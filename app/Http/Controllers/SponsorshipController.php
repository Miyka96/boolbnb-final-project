<?php
namespace App\Http\Controllers;
use App\Sponsorship;

use Illuminate\Http\Request;

class SponsorshipController extends Controller
{
    public function index(){
        $sponsorship= Sponsorship::all();

        return view('user.sponsor', compact('sponsorship'));
    }
}
