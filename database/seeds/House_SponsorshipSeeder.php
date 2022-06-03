<?php

use Illuminate\Database\Seeder;
use App\Sponsorship;
use App\House;
use Faker\Generator as Faker;
use Carbon\Carbon;

class House_SponsorshipSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(Faker $faker)
   {
      $houses = House::all();
      $housesId= $houses->pluck('id')->all();
      $sponsorships = Sponsorship::all();
      // $sponsorshipsId= $sponsorships->pluck('id')->all();

      for($i=0; $i < 100; $i++) {
         $sponsor = $faker->randomElement($sponsorships);
         $sponsorId = $sponsor->id;
         $sponsorDuration = $sponsor->duration;
         $startDate = $faker->dateTimeBetween('-2 week', '+2 week')->format('Y-m-d H:i:s');

         $pivotRecord = DB::table('house_sponsorship')->insert([
            'house_id' => $faker->randomElement($housesId),
            'sponsorship_id' => $sponsorId,
            'sponsor_start' => $startDate,
            // 'sponsor_end' => $startDate->addHours($sponsorDuration)
            'sponsor_end' => date('Y-m-d H:i:s', strtotime($startDate. ' + ' . $sponsorDuration . 'hours'))
         ]);
      }
   }
}
