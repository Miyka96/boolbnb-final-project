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

      Route::get('sponsorships/{house_id}', 'SponsorshipController@index')->name('sponsorship.index'); //metodo custom per attivazione sponsorship
   });

Route::post('/position', 'PositionController@store')->name('position.store');

Route::resource('visualizations', 'VisualizationController')->only('store'); // associata alla funzione che apre la card prima di accedere alla show

Route::get('/home', 'HomeController@index')->name('profile');

Route::any('/send/message', 'SendMessageController@send');

Route::any('/send/visualization', 'VisualizationController@send');

Route::get('/payment/make', 'PaymentsController@make')->name('payment.make');

Route::fallback(function () {
   return view('home');
});


Route::get('/team', function () {
   return view('team');
});

// rotta error 404
