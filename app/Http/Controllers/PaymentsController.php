<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
  // [TODO] da ricontrollare
  public function make(Request $request){
    $payload= $request->input('payload', false);
    $nonce=$payload['nonce'];
    $status=\Braintree\transaction::sale([
      'amount' => '10,00',
      'paymentMethodNonce' => $nonce,
      'options' => [
        'submitForSettlement' => True,
      ]
    ]);
    return response()->json($status);
  }
}
