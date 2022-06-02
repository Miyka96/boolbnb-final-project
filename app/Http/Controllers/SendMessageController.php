<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\DB;

class SendMessageController extends Controller
{
    public function send(Request $request){

            $name = $request->name;
            $email = $request->email;
            $telephone= $request->telephone;
            $content = $request->content;
            $house_id = $request->house_id;
            $sent_at = now();

            $add= DB::table('messages')->insert([
                'name' => $name,
                'email' => $email,
                'telephone' => $telephone,
                'content' => $content,
                'house_id' => $house_id,
                'sent_at' => $sent_at
            ]);

    }
}
