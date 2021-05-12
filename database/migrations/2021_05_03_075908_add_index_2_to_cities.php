<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndex2ToCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('cities', function (Blueprint $table) {
            $table->index('city_ascii');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->dropIndex('city_ascii');

        });
    }
}
