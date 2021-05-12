<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSlugToCountries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->string('slug', 120);
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
        Schema::table('countries', function (Blueprint $table) {


            $table->dropColumn('slug');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
