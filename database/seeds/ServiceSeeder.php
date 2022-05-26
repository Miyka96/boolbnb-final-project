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

      $services = ['Spa','Garden','Washer','Tv','Books','Wi-fi','Kitchen','Barbecue','Secure-box','Self check-in'];

      foreach ($services as $s){
        $service = new Service();

        $service->name= $s;

        $service->save();
      }
    }
}
