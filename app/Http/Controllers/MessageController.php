<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\House;

class MessageController extends Controller
{

  public function index(House $house)
  {
    $messages= Message::with(['house'])->get();

    return view('user.messages-index', compact('messages'));
  }


  // public function send(Request $request){

  //   $name = $request->name;
  //   $email = $request->email;
  //   $telephone= $request->telephone;
  //   $content = $request->content;
  //   $house_id = $request->house_id;
  //   $sent_at = now();

  //   $add= DB::table('messages')->insert([
  //       'name' => $name,
  //       'email' => $email,
  //       'telephone' => $telephone,
  //       'content' => $content,
  //       'house_id' => $house_id,
  //       'sent_at' => $sent_at
  //   ]);
  // }

  public function create() // public function create(House $house)
  {
    return view('user.house-create', compact(['services','house']));
  }

  public function store(Request $request)
  {
    // validations // [TODO] da ricontrollare
    $request->validate([
      'name' => 'required|string|min:4',
      'email' => 'required|email',
      'telephone' => 'required|numeric|min:8',  
      'content' => 'required|string|min:20'
    ]);

    // recall form data
    $data = $request->all();

    // istantiate Message
    $message = new Message();
    $message->fill( $data );
    $message->sent_at = now();
    $message->house_id = $request->house_id;

    $message->save();

    // [TODO] aggiungere feedback invio messaggio

    return redirect()->route('user.houses.index'); // [TODO] redirect verso la show
  }
}
