<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city', 120);
            $table->string('city_ascii', 120);
            $table->string('city_alt', 1000);
            $table->float('latitude',8,4);
            $table->float('longitude', 8,4);
            $table->foreignId('country_id');
            $table->foreignId('admin_id');
            $table->float('density');
            $table->float('population');
            $table->float('population_proper');
            $table->integer('ranking');
            $table->string('timezone', 120);
            $table->string('same_name', 5);
            $table->string('old_id', 10);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
