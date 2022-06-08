<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Message;

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

Route::namespace('Api')->group(function () {

  Route::resource('houses', 'HouseController')
    ->parameters(['houses' => 'house:id'])
    ->only('show');

  Route::get('houses-index/{paginate?}/{sponsored_only?}/{room_num?}/{beds_num?}', 'HouseController@index');
  Route::get('filter/{room_num?}/{beds_num?}/{services?}', 'FilterController@index');

  Route::get('services', 'ServiceController@index')->name('services');

  Route::post('messages_create', function (Request $request) {
    return Message::create($request->all);
  });
  Route::post('messages_store', 'MessageController@store');

  // Route::get('filter/{room_num?}/{beds_num?}/{services?}', 'FilterController@index');
});
