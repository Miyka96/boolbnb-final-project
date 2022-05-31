<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Message;
use App\House;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $houses = House::all();
      $housesId = $houses->pluck('id')->all();

      for ($i=0; $i < 100 ; $i++) { 
         
         $message = new Message();

         $message->name = $faker->name();
         $message->email = $faker->email();
         $message->telephone = $faker->phoneNumber();
         $message->content = $faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2);
         $message->sent_at = $faker->dateTime('now');
         $message->house_id = $faker->randomElement( $housesId );

         $message->save();
      }
    }
}
