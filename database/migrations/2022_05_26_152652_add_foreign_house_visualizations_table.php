<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignHouseVisualizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visualizations', function (Blueprint $table) {
            $table->unsignedBigInteger('house_id');
            $table->foreign('house_id')
            ->references('id')
            ->on('houses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visualizations', function (Blueprint $table) {
            $table->dropForeign('house_id');
            $table->dropColumn('house_id');
        });
    }
}
