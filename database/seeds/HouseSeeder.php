<?php

use App\House;
use App\Service;
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
      
         $house->save();
      }
   }
}
