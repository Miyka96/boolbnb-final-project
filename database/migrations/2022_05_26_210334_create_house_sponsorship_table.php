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

            $table->unsignedBigInteger('order_num');
            // $table->bigInteger('house_id');
            // $table->bigInteger('sponsorship_id');

            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade');
            $table->foreign('sponsorship_id')->references('id')->on('sponsorships')->onDelete('no action');

            $table->primary(['order_num','house_id','sponsorship_id']);

            // $table->dropPrimary('house_id');
            // $table->dropPrimary('sponsorship_id');

            $table->dateTime('sponsor_start');
            $table->dateTime('sponsor_end');
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
