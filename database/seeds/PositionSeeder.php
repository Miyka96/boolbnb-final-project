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

    $addresses = [
        [
          'latitude' => 45.494710,
          'longitude' => 9.159220,
          'address' => 'Viale Monte Ceneri 1',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20155
        ],
        [
          'latitude' => 45.38255,
          'longitude' => 9.16516,
          'address' => 'Viale Romagna 5',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20089
        ],
        [
          'latitude' => 45.363023,
          'longitude' => 9.213335,
          'address' => 'Via Rosa Luxemburg 21',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20085
        ],
        [
          'latitude' => 45.357655,
          'longitude' => 9.314856,
          'address' => 'Via Morandi 10',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20077
        ],
        [
          'latitude' => 45.462238,
          'longitude' => 9.308329,
          'address' => 'Via Marche 20',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20068
        ],
        [
          'latitude' => 45.491039,
          'longitude' => 9.277475,
          'address' => 'Via Cava Trombetta 20',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20090
        ],
        [
          'latitude' => 45.501802,
          'longitude' => 9.271396,
          'address' => 'Via Olgetta 10',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20090
        ],
        [
          'latitude' => 45.501386,
          'longitude' => 9.236995,
          'address' => 'Via Padova 173',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20127
        ],
        [
          'latitude' => 45.496880,
          'longitude' => 9.211202,
          'address' => 'Via Gianfranco Zuretti 70',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20125
        ],
        [
          'latitude' => 45.489935,
          'longitude' => 9.193322,
          'address' => 'Via Torquato Taramelli 8',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20124
        ],
        [
          'latitude' => 45.491757,
          'longitude' => 9.182479,
          'address' => 'Via Privata Dina Galli 6',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20159
        ],
        [
          'latitude' => 45.554538,
          'longitude' => 9.140514,
          'address' => 'Via Madonna 95',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20021
        ],
        [
          'latitude' => 45.542509,
          'longitude' => 9.110955,
          'address' => 'Via Don Fusetti 20',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20021
        ],
        [
          'latitude' => 45.536068,
          'longitude' => 9.102559,
          'address' => 'Via Stelvio 12C',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20021
        ],
        [
          'latitude' => 45.531807,
          'longitude' => 9.102602,
          'address' => 'Via Stella Rosa 48',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20021
        ],
        [
          'latitude' => 45.527437,
          'longitude' => 9.102920,
          'address' => 'Via Resegone 8',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20021
        ],
        [
          'latitude' => 45.524324,
          'longitude' => 9.112173,
          'address' => 'Via Moncenisio 32',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20021
        ],
        [
          'latitude' => 45.467468,
          'longitude' => 9.167028,
          'address' => 'Via Giovanni Boccaccio 20',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20123
        ],
        [
          'latitude' => 45.464065,
          'longitude' => 9.168768,
          'address' => 'Via Morozzo della Rocca 2',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20123
        ],
        [
          'latitude' => 45.460574,
          'longitude' => 9.178713,
          'address' => 'Via Lanzone 2',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20123
        ],
        [
          'latitude' => 45.455904,
          'longitude' => 9.180687,
          'address' => 'Corso di Porta Ticinese 81',
          'city' => 'Milano',
          'country' => 'Italia',
          'zip_code' => 20123
        ]
    ];

    // Attinge dall'array di indirizzi di Milano
    foreach ($addresses as $el) {
      $position = new Position();
      $position->latitude = $el['latitude'];
      $position->longitude = $el['longitude'];
      $position->address = $el['address'];
      $position->city = $el['city'];
      $position->country = $el['country'];
      $position->zip_code = $el['zip_code'];
      $position->save();
    }

    // Generazione casuale di indirizzi
    for ($i = 0; $i < 79; $i++) {
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
