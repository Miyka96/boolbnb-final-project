<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->tinyInteger('room_num');
            $table->tinyInteger('beds_num');
            $table->tinyInteger('toilets_num');
            $table->smallInteger('square_meters');
            $table->string('image');
            $table->boolean('is_visible')->default(true);
            $table->float('cost_per_night', 8, 2);
            $table->timestamps();
        });
    }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('houses');
   }
}
