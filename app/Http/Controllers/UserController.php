<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\House;

class UserController extends Controller
{
       /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $houses = House::where('user_id', auth::user()->id)->get();

        return view('user.user', compact('user','houses'));
    }
}
