<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('foto');
            $table->string('ocupacion');
            $table->string('nacionalidad');
            $table->text('descripcion');
            $table->text('descripcion2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('foto');
            $table->dropColumn('ocupacion');
            $table->dropColumn('nacionalidad');
            $table->dropColumn('descripcion');
            $table->dropColumn('descripcion2');
        });
    }
}
