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
            SponsorshipSeeder::class,
            ServiceSeeder::class,
            PositionSeeder::class,
            HouseSeeder::class,
            MessageSeeder::class,
            VisualizationSeeder::class
        ]);
    }
}