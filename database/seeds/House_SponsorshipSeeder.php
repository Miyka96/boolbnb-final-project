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

      // Cicla tutti gli housesId e genera da 0 a 3 record di house_sponsorship
      foreach ($housesId as $houseId) {
         $sponsorNum = $faker->numberBetween(0, 3);
         $previousEndDate = null;

         // Crezione record house_sponsorship
         for($i=0; $i < $sponsorNum; $i++) {
            $sponsor = $faker->randomElement($sponsorships);
            $sponsorId = $sponsor->id;
            $sponsorDuration = $sponsor->duration;

            // Se è il primo record per questo id, genera una data compresa nel raggio di 2 settimane da oggi
            if($i == 0) {
               $startDate = $faker->dateTimeBetween('-2 week', '+2 week')->format('Y-m-d H:i:s');
            } else { // altrimenti genera una data di partenza a partire dalla date di fine del record precedente + random numero di ore (da 0 a 24)
               $startDate = date('Y-m-d H:i:s', strtotime($previousEndDate . ' + ' . $faker->numberBetween(0, 24) . 'hours'));
            }

            // Compilazione record su DB
            $pivotRecord = DB::table('house_sponsorship')->insert([
               'house_id' => $houseId,
               'sponsorship_id' => $sponsorId,
               'sponsor_start' => $startDate,
               'sponsor_end' => date('Y-m-d H:i:s', strtotime($startDate . ' + ' . $sponsorDuration . 'hours'))
            ]);

            // Aggiornamento prev
            $previousEndDate = date('Y-m-d H:i:s', strtotime($startDate . ' + ' . $sponsorDuration . 'hours'));
         }
      }

      // for($i=0; $i < 100; $i++) {
      //    $sponsor = $faker->randomElement($sponsorships);
      //    $sponsorId = $sponsor->id;
      //    $sponsorDuration = $sponsor->duration;
      //    $startDate = $faker->dateTimeBetween('-2 week', '+2 week')->format('Y-m-d H:i:s');

      //    $pivotRecord = DB::table('house_sponsorship')->insert([
      //       'house_id' => $faker->randomElement($housesId),
      //       'sponsorship_id' => $sponsorId,
      //       'sponsor_start' => $startDate,
      //       // 'sponsor_end' => $startDate->addHours($sponsorDuration)
      //       'sponsor_end' => date('Y-m-d H:i:s', strtotime($startDate. ' + ' . $sponsorDuration . 'hours'))
      //    ]);
      // }
   }
}
