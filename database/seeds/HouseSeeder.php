<?php

use App\House;
use App\Service;
use App\Position;
use App\User;
use App\Sponsorship;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HouseSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(Faker $faker)
   {

      // assign random service_id to house
      $service= Service::all();
      $serviceId= $service->pluck('id')->all();

      // assign random position_id to house
      $position= Position::all();
      $positionId= $position->pluck('id')->all();

      //assign random user_id to house
      $users = User::all();
      $usersId = $users->pluck('id')->all();
      // assign random sponsorship_id to house
      $sponsorship= Sponsorship::all();
      $sponsorshipId= $sponsorship->pluck('id')->all();

      for($i=0; $i < 100; $i++) {
         $house = new House();

         $house->title = $faker->city(); 
         $house->square_meters = $faker->numberBetween(20,300);
         
         $house->room_num = max(1, round( $house->square_meters / 20 * $faker->randomFloat(2, 0.75, 1.25) ) );
         $house->toilets_num = max(1, round( $house->room_num / 3 ) );
         $house->beds_num = max(1, round( $house->room_num * $faker->randomFloat(2, 1, 2) ) );

         $house->image = $faker->url();
         $house->is_visible = $faker->boolean();
         $house->cost_per_night = $faker->randomFloat(2, 10, 1000);   
         $house->position_id = $faker->randomElement($positionId);
         $house->user_id = $faker->randomElement( $usersId );

         $house->save();
         
         $serviceNum = $faker->numberBetween(2,5);
         $house->services()->sync($faker->randomElements($serviceId , $serviceNum) );

         $sponsorNum = $faker->numberBetween(0,2);
         $house->sponsorships()->sync($faker->randomElements($sponsorshipId, $sponsorNum) );
      }
   }
}

// mancano controlli sul rapporto mq/numero di stanze
// concatenare nome città reale al posto del nome + parola random (array di parole tipo "house, apartment" etc)

