<?php

use App\Visualization;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SponsorshipSeeder::class,
            ServiceSeeder::class,
            PositionSeeder::class,
            HouseSeeder::class,
            MessageSeeder::class,
            VisualizationSeeder::class,
            House_SponsorshipSeeder::class,
        ]);
    }
}