<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->unique('slug');
            $table->index('admin_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropUnique('slug');
            $table->dropIndex('admin_name');
        });
    }
}
