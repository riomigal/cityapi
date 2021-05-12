<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->unique('slug');
            $table->index('city');
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
            $table->dropUnique('slug');
            $table->dropIndex('city');
        });
    }
}
