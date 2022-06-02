<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home'); // nel componente home.blade.php è montatto App.vue
});

Auth::routes();

Route::middleware('auth')
   ->name('user.')
   ->prefix('user')
   ->group(function () {

   Route::get('/', 'UserController@show');

   Route::resource('houses', 'HouseController');

   Route::resource('messages', 'MessageController')->only(['create', 'store']);
   Route::get('/messages/{house_id}', 'MessageController@index')->name('messages.index');

   Route::resource('sponporships', 'SponsorshipController'); //metodo custom per attivazione sponsorship

   // rotta statische a partire dalla show
   Route::post('position', 'PositionController@store')->name('position.store');

});

Route::resource('visualizations', 'VisualizationController')->only('store'); // associata alla funzione che apre la card prima di accedere alla show

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/send/message', 'SendMessageController@send');
Route::any('/send/visualization', 'VisualizationController@send');

Route::fallback(function() {
   return view('home');
});

// rotta error 404

