<?php

use App\Service;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for($i=0; $i < 100; $i++) {
         $service = new Service();

         $service->name = $faker->words(7, true);
      
         $service->save();
      }
    }
}
