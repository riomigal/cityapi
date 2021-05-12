<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSlugToCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->string('slug', 150);
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
        Schema::table('cities', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
