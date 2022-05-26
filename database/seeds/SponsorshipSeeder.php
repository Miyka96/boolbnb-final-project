<?php

use App\Sponsorship;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $sponsorship = new Sponsorship();
        $sponsorship->name = 'Sponsor Giornaliera';
        $sponsorship->price = 9.99;
        $sponsorship->duration = 1;

        $sponsorship = new Sponsorship();
        $sponsorship->name = 'Sponsor Settimanale';
        $sponsorship->price = 49.99;
        $sponsorship->duration = 7;

        $sponsorship = new Sponsorship();
        $sponsorship->name = 'Sponsor mensile';
        $sponsorship->price = 149.99;
        $sponsorship->duration = 30;
    }
}
