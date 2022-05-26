<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignHouseMessagesTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::table('messages', function (Blueprint $table) {
         
         // creo colonna
         $table->unsignedBigInteger('house_id');

         // creo foreign key
         $table->foreign('house_id')
            ->references('id')
            ->on('houses')
            ->onDelete('cascade');
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::table('messages', function (Blueprint $table) {
         
         $table->dropForeign(['house_id']);

         $table->dropColumn('house_id');
      });
   }
}
