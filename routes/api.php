<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::namespace('Api')->group(function() {

//    Route::get('services', 'ServiceController@show')->name('services'); 
   
//    Route::get('houses', 'HouseController@index')->name('houses');
// });

Route::namespace('Api')->group(function() {

   Route::resource('houses','HouseController')
      ->parameters(['houses' => 'house:id'])
      ->only(['index','show']);
   
   Route::get('services', 'ServiceController@index')->name('services'); 
});