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
        $sponsorship->name = 'Sponsorizzazione Base';
        $sponsorship->price = 2.99;
        $sponsorship->duration = 24;

        $sponsorship->save();

        $sponsorship = new Sponsorship();
        $sponsorship->name = 'Sponsorizzazione Super';
        $sponsorship->price = 5.99;
        $sponsorship->duration = 72;

        $sponsorship->save();

        $sponsorship = new Sponsorship();
        $sponsorship->name = 'Sponsorizzazione Ultra';
        $sponsorship->price = 9.99;
        $sponsorship->duration = 144;

        $sponsorship->save();
    }
}
