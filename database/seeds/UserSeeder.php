<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(Faker $faker)
   {
      User::create([
         'name' => 'admin',
         'surname' => 'admin',
         'email' => 'admin@wowlidays.com',
         'password' => Hash::make('admin'),
         'birthday' => '0000-12-25'
      ]);

      for($i=0; $i < 100; $i++) {
         User::create([
            'name' => $faker->name(),
            'surname' => $faker->lastName(),
            'email' => $faker->email(),
            'password' => Hash::make( $faker->word() ),
            'birthday' => $faker->date()
         ]);
      }
   }
}
