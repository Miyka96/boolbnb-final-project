<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseSponsorshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_sponsorship', function (Blueprint $table) {

            $table->id('order_id');

            $table->unsignedBigInteger('house_id');
            $table->unsignedBigInteger('sponsorship_id');

            $table->foreign('house_id')
               ->references('id')
               ->on('houses')
               ->onDelete('cascade');

            $table->foreign('sponsorship_id')->references('id')->on('sponsorships')->onDelete('no action');

            $table->dateTime('sponsor_start')->nullable();
            $table->dateTime('sponsor_end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_sponsorship');
    }
}
