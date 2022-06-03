<?php

use Illuminate\Database\Seeder;
use App\Sponsorship;
use App\House;
use Faker\Generator as Faker;

class HouseSponsorshipSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $houses = House::all()->id();
      $housesId= $house->pluck('id')->all();
      $sponsorships = Sponsorship::all();

      for($i=0; $i < 100; $i++) {
         $sponsor = $faker->randomElement($sponsorships);
         $sponsor_id = $sponsor->id;
         $sponsor_duration = $sponsor->duration;
         $start_date = $faker->dateTimeBetween('-2 week', '+2 week');

         $pivotRecord = DB::table('house_sponsorship')->insert([
            'house_id' => $faker->randomElement($housesId),
            'sponsorship_id' => $sponsor_id,
            'sponsor_start' => $start_date,
            'sponsor_end' => $start_date + $sponsor_duration
         ]);
      }
   }
}
