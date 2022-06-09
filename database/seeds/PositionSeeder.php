<?php

use App\Position;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PositionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    // Oggetti per test
    $positionMilano1 = new Position();
    $positionMilano1->latitude = 45.49471;
    $positionMilano1->longitude = 9.15922;
    $positionMilano1->address = 'Viale Monte Ceneri 1';
    $positionMilano1->city = 'Milano';
    $positionMilano1->country = 'Italia';
    $positionMilano1->zip_code = 20155;
    $positionMilano1->save();

    $positionMilano2 = new Position();
    $positionMilano2->latitude = 45.46517;
    $positionMilano2->longitude = 9.18614;
    $positionMilano2->address = 'Via Dante 1';
    $positionMilano2->city = 'Milano';
    $positionMilano2->country = 'Italia';
    $positionMilano2->zip_code = 20100;
    $positionMilano2->save();

    $positionMilano3 = new Position();
    $positionMilano3->latitude = 45.48694;
    $positionMilano3->longitude = 9.15798;
    $positionMilano3->address = 'Corso Sempione 100';
    $positionMilano3->city = 'Milano';
    $positionMilano3->country = 'Italia';
    $positionMilano3->zip_code = 20100;
    $positionMilano3->save();

    for ($i = 0; $i < 97; $i++) {
      $position = new Position();
      $position->latitude = $faker->latitude($min = -90, $max = 90);
      $position->longitude = $faker->longitude($min = -180, $max = 180);
      $position->address = $faker->streetAddress();
      $position->city = $faker->city();
      $position->country = $faker->country();
      $position->zip_code = $faker->postcode();
      $position->save();
    }
  }
}
