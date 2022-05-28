<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
   /**
    * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $services = Service::all();

      if( $services ) {
         return response()->json([
            'services' => $services,
            'success' => true
         ]);
      }

      return response()->json([
         'message' => 'Services not found',
         'success' => false
      ]);
   }
}
