<?php

use App\House;
use App\Service;
use App\Position;
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

      // assign random sponsorship_id to house
      $sponsorship= Sponsorship::all();
      $sponsorshipId= $sponsorship->pluck('id')->all();

      for($i=0; $i < 100; $i++) {
         $house = new House();

         $house->title = $faker->words(7, true);
         $house->room_num = $faker->numberBetween(1,10);
         $house->beds_num = $faker->numberBetween(1,10);
         $house->toilet_nums = $faker->numberBetween(1,10);
         $house->square_meters = $faker->numberBetween(20,10000);
         $house->image = $faker->url();
         $house->is_visible = $faker->boolean();
         $house->cost_per_night = $faker->randomFloat(2, 10, 10000);   
         $house->position_id = $faker->randomElement($positionId);

         $house->save();
         
         $serviceNum = $faker->numberBetween(2,5);
         $house->services()->sync($faker->randomElements($serviceId , $serviceNum) );

         $sponsorNum = $faker->numberBetween(0,2);
         $house->sponsorships()->sync($faker->randomElements($sponsorshipId, $sponsorNum) );
      }
   }
}
