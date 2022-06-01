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
      $houseAttribute = [' al mare', ' con vista', ' al lago', ' in montagna', " d'epoca", ' belvedere'];
      $name = ["Anderson", "Ashwoon", "Aikin", "Bateman", "Bongard", "Bowers", "Boyd", "Cannon", "Cast", "Deitz", "Dewalt", "Ebner", "Frick", "Hancock", "Haworth", "Hesch", "Hoffman", "Kassing", "Knutson", "Lawless", "Lawicki", "Mccord", "McCormack", "Miller", "Myers", "Nugent", "Ortiz", "Orwig", "Ory", "Paiser", "Pak", "Pettigrew", "Quinn", "Quizoz", "Ramachandran", "Resnick", "Sagar", "Schickowski", "Schiebel", "Sellon", "Severson", "Shaffer", "Solberg", "Soloman", "Sonderling", "Soukup", "Soulis", "Stahl", "Sweeney", "Tandy", "Trebil", "Trusela", "Trussel", "Turco", "Uddin", "Uflan", "Ulrich", "Upson", "Vader", "Vail", "Valente", "Van Zandt", "Vanderpoel", "Ventotla", "Vogal", "Wagle", "Wagner", "Wakefield", "Weinstein", "Weiss", "Woo", "Yang", "Yates", "Yocum", "Zeaser", "Zeller", "Ziegler", "Bauer", "Baxster", "Casal", "Cataldi", "Caswell", "Celedon", "Chambers", "Chapman", "Christensen", "Darnell", "Davidson", "Davis", "DeLorenzo", "Dinkins", "Doran", "Dugelman", "Dugan", "Duffman", "Eastman", "Ferro", "Ferry", "Fletcher", "Fietzer", "Hylan", "Hydinger", "Illingsworth", "Ingram", "Irwin", "Jagtap", "Jenson", "Johnson", "Johnsen", "Jones", "Jurgenson", "Kalleg", "Kaskel", "Keller", "Leisinger", "LePage", "Lewis", "Linde", "Lulloff", "Maki", "Martin", "McGinnis", "Mills", "Moody", "Moore", "Napier", "Nelson", "Norquist", "Nuttle", "Olson", "Ostrander", "Reamer", "Reardon", "Reyes", "Rice", "Ripka", "Roberts", "Rogers", "Root", "Sandstrom", "Sawyer", "Schlicht", "Schmitt", "Schwager", "Schutz", "Schuster", "Tapia", "Thompson", "Tiernan", "Tisler" ];   

      //Array immagini
      $housesImg = [
         [
             "card_img" => "https://images.unsplash.com/photo-1605352081508-2e09927ecfe3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1605352081508-2e09927ecfe3?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1598928506311-c55ded91a20c?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxfHxsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDUwMDg&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1590073242678-70ee3fc28e8e?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MXwxfHNlYXJjaHwxfHxiZWRyb29tfGVufDB8MHx8fDE2NTM0MDYyMzc&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1582397988306-3212b3f38f99?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1582397988306-3212b3f38f99?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1631679706909-1844bbd07221?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyfHxsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDUwMDg&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1574643156929-51fa098b0394?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzfHxiZWRyb29tfGVufDB8MHx8fDE2NTM0MDYyMzc&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1521782462922-9318be1cfd04?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1521782462922-9318be1cfd04?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1567767292278-a4f21aa2d36e?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzfHxsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDUwMDg&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1566665797739-1674de7a421a?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw0fHxiZWRyb29tfGVufDB8MHx8fDE2NTM0MDYyMzc&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1551524164-687a55dd1126?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw0fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1551524164-687a55dd1126?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw0fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1585412727339-54e4bae3bbf9?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw1fHxsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDUwMDg&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/flagged/photo-1573168710865-2e4c680d921a?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw2fHxiZWRyb29tfGVufDB8MHx8fDE2NTM0MDYyMzc&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1515859005217-8a1f08870f59?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw1fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1515859005217-8a1f08870f59?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw1fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1600121848594-d8644e57abab?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw2fHxsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDUwMDg&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1598928636135-d146006ff4be?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw3fHxiZWRyb29tfGVufDB8MHx8fDE2NTM0MDYyMzc&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1606030689001-3ee5ac74e3bf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw2fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1606030689001-3ee5ac74e3bf?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw2fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1605774337664-7a846e9cdf17?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw3fHxsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDUwMDg&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1560185893-a55cbc8c57e8?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw5fHxiZWRyb29tfGVufDB8MHx8fDE2NTM0MDYyMzc&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1594398901394-4e34939a4fd0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw3fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1594398901394-4e34939a4fd0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw3fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1588471980726-8346cb477a33?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw4fHxsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDUwMDg&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1578683010236-d716f9a3f461?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMHx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1605352081428-500953badc02?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw4fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1605352081428-500953badc02?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw4fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1565182999561-18d7dc61c393?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw5fHxsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDUwMDg&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1618221118493-9cfa1a1c00da?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMnx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1595877244575-941ed61fb8f0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw5fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1595877244575-941ed61fb8f0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw5fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTc0Mjk&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1632829882891-5047ccc421bc?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMHx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1616486029423-aaa4789e8c9a?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxM3x8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1617859047452-8510bcf207fd?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk3NDI5&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1617859047452-8510bcf207fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk3NDI5&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1592247350271-c5efb34dd967?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMXx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1571508601891-ca5e7a713859?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNHx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1627615731812-518870a3c0da?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1627615731812-518870a3c0da?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1582037928769-181f2644ecb7?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMnx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNXx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1523391139596-e7da8a18c733?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwNHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1523391139596-e7da8a18c733?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwNHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1554995207-c18c203602cb?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxM3x8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1562438668-bcf0ca6578f0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNnx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1622484046877-9c0edb923eb4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwNXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1622484046877-9c0edb923eb4?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwNXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1513694203232-719a280e022f?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNHx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1585821569331-f071db2abd8d?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxN3x8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1597607990850-8c780ee8d1a0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwN3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1597607990850-8c780ee8d1a0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwN3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1582417728413-b2347161b864?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNXx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1532344214108-1b6d425db572?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxOHx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1531557336563-9c5f4b640acf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwOHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1531557336563-9c5f4b640acf?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwOHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNnx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1600210491305-7396500b5b31?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxOXx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1628190036834-f4c490a08c78?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwOXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1628190036834-f4c490a08c78?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwOXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1615873968403-89e068629265?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxN3x8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1632210702485-e1841e30752a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMHx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80&w=1080",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1570897859685-a1078823d460?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAxMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1570897859685-a1078823d460?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAxMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzMzk4ODQ3&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1556022363-5187bfa13ad9?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxOHx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1586105251261-72a756497a11?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMXx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1605352081428-500953badc02?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMnx8aG9saWRheSUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTkyMjc&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1605352081428-500953badc02?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMnx8aG9saWRheSUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTkyMjc&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1606654810639-76ed5d12737b?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxOXx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1566195992011-5f6b21e539aa?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMnx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1607782983924-b5dddd9ddfb7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwM3x8aG9saWRheSUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTkyMjc&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1607782983924-b5dddd9ddfb7?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwM3x8aG9saWRheSUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTkyMjc&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1565183997392-2f6f122e5912?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMHx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1622127922040-13cab637ee78?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyM3x8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1496933468544-d48dacc69b53?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwNHx8aG9saWRheSUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTkyMjc&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1496933468544-d48dacc69b53?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwNHx8aG9saWRheSUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTkyMjc&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMXx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1633505650701-6104c4fc72c2?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNHx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1606586242912-6920c07d8adc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwNXx8aG9saWRheSUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTkyMjc&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1606586242912-6920c07d8adc?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwNXx8aG9saWRheSUyMGhvdXNlfGVufDB8MHx8fDE2NTMzOTkyMjc&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1634547588713-edd93045b9f1?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMnx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1616627686733-122fec9d87b2?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNXx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1595877244575-941ed61fb8f0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw5fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1595877244575-941ed61fb8f0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw5fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1542928658-22251e208ac1?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyM3x8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1633505765486-e404bbbec654?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNnx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1617859047452-8510bcf207fd?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1617859047452-8510bcf207fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1542928658-22251e208ac1?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyM3x8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1618220924273-338d82d6b886?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyN3x8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1612010863789-40e90e0f5112?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1612010863789-40e90e0f5112?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1547166812-0fca6370dc03?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNXx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1595526051245-4506e0005bd0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyOHx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1480618425819-5530e06e4a03?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1480618425819-5530e06e4a03?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1631510083755-11ecb5172d81?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNnx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1632829401795-2745c905ac77?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyOXx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1608471562971-2f83b0fe69d4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxM3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1608471562971-2f83b0fe69d4?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxM3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1616627440455-9907b864b144?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyN3x8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1618221770758-01929bf5ed39?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzMHx8YmVkcm9vbXxlbnwwfDB8fHwxNjUzNDA2MjM3&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1563148760-64687068abdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1563148760-64687068abdf?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyOHx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1469796466635-455ede028aca?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1469796466635-455ede028aca?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1541123603104-512919d6a96c?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyOXx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1617104678098-de229db51175?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDJ8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1484804959297-65e7c19d7c9f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1484804959297-65e7c19d7c9f?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb",
                 "living" => "https://images.unsplash.com/photo-1617103996702-96ff29b1c467?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzMHx8bGl2aW5nJTIwcm9vbXxlbnwwfDB8fHwxNjUzNDA1MDA4&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1632119289059-793dd347950f?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDN8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb",
                 "living" => "https://images.unsplash.com/photo-1628744876497-eb30460be9f6?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDF8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1616137507072-f7276b168614?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDR8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1618168139362-5d0575e6c024?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxOHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1618168139362-5d0575e6c024?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxOHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1634547532213-a4b8d7ff8927?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDJ8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1612152605347-f93296cb657d?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDV8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1515725715471-901a7c17cd8b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1515725715471-901a7c17cd8b?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1614622352876-4a90d2515f0d?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDN8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1628746234641-28eb583a51b4?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDZ8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1605352081508-2e09927ecfe3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1605352081508-2e09927ecfe3?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1586024486164-ce9b3d87e09f?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDV8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1625334782252-da92af3ad887?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDd8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1582397988306-3212b3f38f99?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1582397988306-3212b3f38f99?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1616627974584-fe184eee3645?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDZ8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1521783988139-89397d761dce?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDh8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1521782462922-9318be1cfd04?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1521782462922-9318be1cfd04?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzfHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1633330977020-2bdfb8530cc2?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDd8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1604580040660-f0a7f9abaea6?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDl8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1551524164-687a55dd1126?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw0fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1551524164-687a55dd1126?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw0fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1596204976717-1a9ff47f74ef?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDh8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1633944095397-878622ebc01c?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTB8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1515859005217-8a1f08870f59?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw1fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1515859005217-8a1f08870f59?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw1fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1633505899118-4ca6bd143043?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMDl8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1574643014728-053f16745e49?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTF8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1606030689001-3ee5ac74e3bf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw2fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1606030689001-3ee5ac74e3bf?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw2fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1606744824163-985d376605aa?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTB8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1631048501851-4aa85ffc3be8?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTJ8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1594398901394-4e34939a4fd0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw3fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1594398901394-4e34939a4fd0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw3fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1615876234886-fd9a39fda97f?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTF8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1591088398332-8a7791972843?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTN8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1605352081428-500953badc02?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw4fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1605352081428-500953badc02?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw4fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1628745750131-e5cfc5e70ced?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTJ8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1616486232086-81d47190669a?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTV8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1595877244575-941ed61fb8f0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw5fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1595877244575-941ed61fb8f0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHw5fHx2YWNhdGlvbiUyMGhvdXNlfGVufDB8MHx8fDE2NTM0MDAxNTM&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1608235376176-c11df9952002?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTN8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTZ8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1617859047452-8510bcf207fd?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1617859047452-8510bcf207fd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1617978241112-898785df45b9?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTR8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1618221257490-1d703817596c?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTd8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1612010863789-40e90e0f5112?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1612010863789-40e90e0f5112?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1600210492493-0946911123ea?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTV8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1631889993877-71e193bf79b8?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTh8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1480618425819-5530e06e4a03?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1480618425819-5530e06e4a03?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1609766857120-0183863c7971?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTZ8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1634208006171-6713e0c9a25e?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTl8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1608471562971-2f83b0fe69d4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxM3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1608471562971-2f83b0fe69d4?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxM3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1616464916566-c09efd4272a8?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTd8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1617099443741-a9b51eabd2b8?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjJ8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1563148760-64687068abdf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1563148760-64687068abdf?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1630699144035-c0f6311ec482?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTh8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1574643065818-b1c2ff1ae03f?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjN8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1638121757833-274f0c93e3b0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1638121757833-274f0c93e3b0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1616137148650-4aa14651e02b?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMTl8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1496417263034-38ec4f0b665a?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjR8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1469796466635-455ede028aca?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1469796466635-455ede028aca?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxNnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1600421468168-370690d2445c?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjB8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1618219629869-9ef11e2d7701?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjV8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1475503572774-15a45e5d60b9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxN3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1475503572774-15a45e5d60b9?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxN3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1631509716275-59e9d106504a?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjF8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1617325247661-675ab4b64ae2?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjZ8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1618168139362-5d0575e6c024?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxOHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1618168139362-5d0575e6c024?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxOHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1618219740975-d40978bb7378?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjJ8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjd8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1493809842364-78817add7ffb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxOXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1493809842364-78817add7ffb?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxOXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1613082442324-62ef5249275e?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjN8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1602028447187-cf69e6b802af?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjh8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1440778303588-435521a205bc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1440778303588-435521a205bc?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/flagged/photo-1573168750672-2ff2f682f241?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjR8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1631048501786-4e97f20eac71?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjl8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1515725715471-901a7c17cd8b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1515725715471-901a7c17cd8b?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1600494448850-6013c64ba722?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjV8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1598928334118-f86743750cd8?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMzB8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzEyOQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1600786288830-9f5d4bf1d516?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1600786288830-9f5d4bf1d516?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1484101403633-562f891dc89a?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjZ8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1538944495092-48fff71fbb0c?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMDJ8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzU3Ng&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1622484179054-30d00a9c0fa0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyM3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1622484179054-30d00a9c0fa0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyM3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1616627974469-aeadf7890ed4?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjd8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1616486532925-accce4930585?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMDN8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzU3Ng&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1511097178962-9bab92bc5665?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1511097178962-9bab92bc5665?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1616627987907-4893fae79457?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjh8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1611892440504-42a792e24d32?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMDR8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzU3Ng&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1499678329028-101435549a4e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1499678329028-101435549a4e?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1630581630833-27c2b470e9cc?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMjl8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1609234841642-6008b93ab310?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMDZ8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzU3Ng&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1478361000558-6f397482ffbd?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1478361000558-6f397482ffbd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyNnx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1606744888344-493238951221?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxMDAwMzB8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNTU4OA&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1560184897-502a475f7a0d?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMDh8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzU3Ng&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1613404021719-95d13398f86e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyN3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1613404021719-95d13398f86e?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyN3x8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1618221710640-c0eaaa2adb49?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMDJ8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNjA0Mw&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1609766857041-ed402ea8069a?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMDl8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzU3Ng&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1609485721757-75a89ffe28bd?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyOHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1609485721757-75a89ffe28bd?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyOHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1613545325268-9265e1609167?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMDN8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNjA0Mw&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1630699033486-1c023b58bf77?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMTB8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzU3Ng&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1593808746647-4c8c07d2f1a9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyOXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1593808746647-4c8c07d2f1a9?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyOXx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1505691723518-36a5ac3be353?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMDR8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNjA0Mw&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1574873215043-44119461cb3b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMTF8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzU3Ng&ixlib=rb-1.2.1&q=80&w=1080",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1631474267886-9ac3d021d872?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1631474267886-9ac3d021d872?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzMHx8dmFjYXRpb24lMjBob3VzZXxlbnwwfDB8fHwxNjUzNDAwMTUz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1632999101501-47bd016f7e46?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMDV8fGxpdmluZyUyMHJvb218ZW58MHwwfHx8MTY1MzQwNjA0Mw&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1617104611622-d5f245d317f0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyMDAwMTN8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwNzU3Ng&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1564013799919-ab600027ffc6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxfHxiZWF1dGlmdWwlMjBob3VzZXxlbnwwfDB8fHwxNjUzNDA4MDYz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1564013799919-ab600027ffc6?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxfHxiZWF1dGlmdWwlMjBob3VzZXxlbnwwfDB8fHwxNjUzNDA4MDYz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1613545564245-62b2c9ef8055?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwxfHxiZWF1dGlmdWwlMjBsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDgyNjc&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1579283111541-081efe96f922?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzMDAwMDF8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwODY5OQ&ixlib=rb-1.2.1&q=80",
             ],
         ],
         [
             "card_img" => "https://images.unsplash.com/photo-1564501049412-61c2a3083791?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyfHxiZWF1dGlmdWwlMjBob3VzZXxlbnwwfDB8fHwxNjUzNDA4MDYz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1564501049412-61c2a3083791?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyfHxiZWF1dGlmdWwlMjBob3VzZXxlbnwwfDB8fHwxNjUzNDA4MDYz&ixlib=rb-1.2.1&q=80&raw_url=true",
                 "living" => "https://images.unsplash.com/photo-1562664377-709f2c337eb2?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwyfHxiZWF1dGlmdWwlMjBsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDgyNjc&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1570572134645-37415323bc9f?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzMDAwMDJ8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwODY5OQ&ixlib=rb-1.2.1&q=80",
             ],
         ],    [
             "card_img" => "https://images.unsplash.com/photo-1630650231815-a567e2ed26cc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzfHxiZWF1dGlmdWwlMjBob3VzZXxlbnwwfDB8fHwxNjUzNDA4MDYz&ixlib=rb-1.2.1&q=80&w=400",
             "show_img" => [
                 "full" => "https://images.unsplash.com/photo-1630650231815-a567e2ed26cc?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzfHxiZWF1dGlmdWwlMjBob3VzZXxlbnwwfDB8fHwxNjUzNDA4MDYz&ixlib=rb-1.2.1&q=80",
                 "living" => "https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzfHxiZWF1dGlmdWwlMjBsaXZpbmclMjByb29tfGVufDB8MHx8fDE2NTM0MDgyNjc&ixlib=rb-1.2.1&q=80",
                 "bedroom" => "https://images.unsplash.com/photo-1614590370666-22e7beade570?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwxOTAzOTR8MHwxfHNlYXJjaHwzMDAwMDN8fGJlZHJvb218ZW58MHwwfHx8MTY1MzQwODY5OQ&ixlib=rb-1.2.1&q=80",
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
         $house->is_visible = $faker->boolean();
         $house->cost_per_night = $faker->randomFloat(2, 10, 1000);   
         $house->position_id = $faker->randomElement($positionId);
         $house->user_id = $faker->randomElement( $usersId );

         // Vedi sopra gli array con gli elementi
         $house->title = $faker->randomElement([
            $faker->randomElement($houseNameF) . $faker->randomElement($houseAdjF) . $faker->optional()->randomElement($houseAttribute) . ' ' . $faker->optional()->randomElement($name),
            $faker->randomElement($houseNameM) . $faker->randomElement($houseAdjM) . $faker->optional()->randomElement($houseAttribute) . ' ' . $faker->optional()->randomElement($name)
         ]);

         $house->save();
         
         $serviceNum = $faker->numberBetween(2,5);
         $house->services()->sync($faker->randomElements($serviceId , $serviceNum) );

         $sponsorNum = $faker->numberBetween(0,2);
         $house->sponsorships()->sync($faker->randomElements($sponsorshipId, $sponsorNum) );
      }
   }
}

// mancano controlli sul rapporto mq/numero di stanze
// concatenare nome città reale al posto del nome + parola random (array di parole tipo "house, apartment" etc)

