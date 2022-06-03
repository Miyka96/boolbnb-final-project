<?php

use App\Sponsorship;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorship = new Sponsorship();
        $sponsorship->name = 'Sponsorship Base';
        $sponsorship->price = 2.99;
        $sponsorship->duration = '24:00:00';

        $sponsorship->save();

        $sponsorship = new Sponsorship();
        $sponsorship->name = 'Sponsorship Super';
        $sponsorship->price = 5.99;
        $sponsorship->duration ='72:00:00';

        $sponsorship->save();

        $sponsorship = new Sponsorship();
        $sponsorship->name = 'Sponsorship Ultra';
        $sponsorship->price = 9.99;
        $sponsorship->duration = '144:00:00';

        $sponsorship->save();
    }
}
