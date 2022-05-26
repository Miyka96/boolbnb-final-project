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
        $sponsorship->name = 'Sponsor Giornaliera';
        $sponsorship->price = 9.99;
        $sponsorship->duration = '24:00:00';

        $sponsorship = new Sponsorship();
        $sponsorship->name = 'Sponsor Settimanale';
        $sponsorship->price = 49.99;
        $sponsorship->duration ='72:00:00';

        $sponsorship = new Sponsorship();
        $sponsorship->name = 'Sponsor Mensile';
        $sponsorship->price = 149.99;
        $sponsorship->duration = '144:00:00';

        $sponsorship->save();
    }
}
