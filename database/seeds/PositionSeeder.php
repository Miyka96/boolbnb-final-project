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
        for ($i = 0; $i < 100; $i++) {
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
