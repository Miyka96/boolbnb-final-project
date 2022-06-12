<?php

use App\House;
use App\Service;
use App\Position;
use App\User;
use App\Sponsorship;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HouseSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(Faker $faker)
   {

      // assign random service_id to house
      $service= Service::all();
      $serviceId= $service->pluck('id')->all();

      // assign random position_id to house
      $position= Position::all();
      $positionId= $position->pluck('id')->all();

      //assign random user_id to house
      $users = User::all();
      $usersId = $users->pluck('id')->all();
      // assign random sponsorship_id to house
      $sponsorship= Sponsorship::all();
      $sponsorshipId= $sponsorship->pluck('id')->all();

      // Array per generazione nome case
      $houseNameF = ['Casa vacanze', 'Villa', 'Tinyhouse', 'Casa', 'Camera'];
      $houseAdjF = [' famosa', ' panoramica', ' luminosa', ' riservata', ' artistica'];
      $houseNameM = ['Chalet', 'Cottage', 'Appartamento', 'Loft', 'Monolocale'];
      $houseAdjM = [' famoso', ' panoramico', ' luminoso', ' riservato', ' artistico'];
      $houseAttribute = [' Van Gogh', ' Renoir', ' Monet', ' Cézanne', " Gauguin", ' Rembrandt', ' Rubens', ' Courbet',' Lautrec', ' Delacroix', ' Goya', ' Dalì', ' Frida', ' Modigliani'];
      $name = ["Anderson", "Ashwoon", "Aikin", "Bateman", "Bongard", "Bowers", "Boyd", "Cannon", "Cast", "Deitz", "Dewalt", "Ebner", "Frick", "Hancock", "Haworth", "Hesch", "Hoffman", "Kassing", "Knutson", "Lawless", "Lawicki", "Mccord", "McCormack", "Miller", "Myers", "Nugent", "Ortiz", "Orwig", "Ory", "Paiser", "Pak", "Pettigrew", "Quinn", "Quizoz", "Ramachandran", "Resnick", "Sagar", "Schickowski", "Schiebel", "Sellon", "Severson", "Shaffer", "Solberg", "Soloman", "Sonderling", "Soukup", "Soulis", "Stahl", "Sweeney", "Tandy", "Trebil", "Trusela", "Trussel", "Turco", "Uddin", "Uflan", "Ulrich", "Upson", "Vader", "Vail", "Valente", "Van Zandt", "Vanderpoel", "Ventotla", "Vogal", "Wagle", "Wagner", "Wakefield", "Weinstein", "Weiss", "Woo", "Yang", "Yates", "Yocum", "Zeaser", "Zeller", "Ziegler", "Bauer", "Baxster", "Casal", "Cataldi", "Caswell", "Celedon", "Chambers", "Chapman", "Christensen", "Darnell", "Davidson", "Davis", "DeLorenzo", "Dinkins", "Doran", "Dugelman", "Dugan", "Duffman", "Eastman", "Ferro", "Ferry", "Fletcher", "Fietzer", "Hylan", "Hydinger", "Illingsworth", "Ingram", "Irwin", "Jagtap", "Jenson", "Johnson", "Johnsen", "Jones", "Jurgenson", "Kalleg", "Kaskel", "Keller", "Leisinger", "LePage", "Lewis", "Linde", "Lulloff", "Maki", "Martin", "McGinnis", "Mills", "Moody", "Moore", "Napier", "Nelson", "Norquist", "Nuttle", "Olson", "Ostrander", "Reamer", "Reardon", "Reyes", "Rice", "Ripka", "Roberts", "Rogers", "Root", "Sandstrom", "Sawyer", "Schlicht", "Schmitt", "Schwager", "Schutz", "Schuster", "Tapia", "Thompson", "Tiernan", "Tisler" ];   

      //Array immagini
      $housesImg = [
        [
            "card_img" => "https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa1.jpg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1370704/pexels-photo-1370704.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa2.jpeg"
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1643389/pexels-photo-1643389.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa3.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa4.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1438832/pexels-photo-1438832.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa5.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa6.jpeg"
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa7.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1475938/pexels-photo-1475938.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa8.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/463996/pexels-photo-463996.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa9.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1115804/pexels-photo-1115804.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa10.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/347141/pexels-photo-347141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa11.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa12.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/772177/pexels-photo-772177.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa13.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/2119714/pexels-photo-2119714.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa14.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1000985/pexels-photo-1000985.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa15.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/314937/pexels-photo-314937.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa16.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/209296/pexels-photo-209296.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa17.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa18.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1732414/pexels-photo-1732414.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa19.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1438834/pexels-photo-1438834.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa20.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/534151/pexels-photo-534151.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa21.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1449729/pexels-photo-1449729.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa22.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/2089698/pexels-photo-2089698.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa23.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/221540/pexels-photo-221540.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa24.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/2079234/pexels-photo-2079234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa25.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/356809/pexels-photo-356809.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa26.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/210617/pexels-photo-210617.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa27.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1013427/pexels-photo-1013427.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa28.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa29.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa30.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/280222/pexels-photo-280222.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa31.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa32.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/279607/pexels-photo-279607.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa33.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa34.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/277667/pexels-photo-277667.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa35.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/164522/pexels-photo-164522.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa36.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/323772/pexels-photo-323772.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa37.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/53610/large-home-residential-house-architecture-53610.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa38.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/271816/pexels-photo-271816.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa39.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/259962/pexels-photo-259962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa40.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/164558/pexels-photo-164558.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa41.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/11697146/pexels-photo-11697146.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa42.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/8267012/pexels-photo-8267012.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa43.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/8267002/pexels-photo-8267002.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa44.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/8266918/pexels-photo-8266918.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa45.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/10031411/pexels-photo-10031411.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa46.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/9937445/pexels-photo-9937445.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa46.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/9151311/pexels-photo-9151311.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa47.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/4940603/pexels-photo-4940603.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa48.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/4933643/pexels-photo-4933643.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa49.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/4850617/pexels-photo-4850617.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa50.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/7746549/pexels-photo-7746549.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa51.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/7746556/pexels-photo-7746556.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa52.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa53.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1612351/pexels-photo-1612351.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa54.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/6480707/pexels-photo-6480707.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa55.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/6775268/pexels-photo-6775268.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa56.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa57.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa58.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/2724748/pexels-photo-2724748.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa59.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/6492402/pexels-photo-6492402.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa60.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/4846097/pexels-photo-4846097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa61.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/1918291/pexels-photo-1918291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa62.webp",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/3797991/pexels-photo-3797991.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa63.jpeg",
            ],
        ],
        [
            "card_img" => "https://images.pexels.com/photos/3214064/pexels-photo-3214064.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
            "show_img" => [
                "full" => "uploads/casa64.jpeg",
            ],
        ],
      ];

      // Seeder
      for($i=0; $i < 100; $i++) {
         $house = new House();

         $house->square_meters = $faker->numberBetween(20,300);

         $house->room_num = max(1, round( $house->square_meters / 20 * $faker->randomFloat(2, 0.75, 1.25) ) );
         $house->toilets_num = max(1, round( $house->room_num / 3 ) );
         $house->beds_num = max(1, round( $house->room_num * $faker->randomFloat(2, 1, 2) ) );

         $house->image = $faker->randomElement($housesImg)['show_img']['full'];
         $house->is_visible = $faker->randomElement([true, true, true, false]);
         $house->cost_per_night = $faker->randomFloat(2, 10, 1000);   
         $house->position_id = $i + 1;
         $house->user_id = $faker->randomElement( $usersId );

         // Vedi sopra gli array con gli elementi
         $house->title = $faker->randomElement([
            $faker->randomElement($houseNameF) . $faker->randomElement($houseAdjF) . $faker->optional()->randomElement($houseAttribute) . ' ' . $faker->optional()->randomElement($name),
            $faker->randomElement($houseNameM) . $faker->randomElement($houseAdjM) . $faker->optional()->randomElement($houseAttribute) . ' ' . $faker->optional()->randomElement($name)
         ]);

         $house->save();
         
         $serviceNum = $faker->numberBetween(2,5);
         $house->services()->sync($faker->randomElements($serviceId , $serviceNum) );

         // $sponsorNum = $faker->numberBetween(0,2);
         // $house->sponsorships()->sync($faker->randomElements($sponsorshipId, $sponsorNum) );
      }
   }
}

// mancano controlli sul rapporto mq/numero di stanze
// concatenare nome città reale al posto del nome + parola random (array di parole tipo "house, apartment" etc)

