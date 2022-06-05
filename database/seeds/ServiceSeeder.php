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

      $services = ['Spa','Giardino','Lavatrice','Tv','Libri','Wi-fi','Cucina','Barbecue','Cassaforte','Self check-in', 'Animali ammessi', 'Fumatori', 'Parcheggio'];

      foreach ($services as $s){
        $service = new Service();

        $service->name= $s;

        $service->save();
      }
    }
}
