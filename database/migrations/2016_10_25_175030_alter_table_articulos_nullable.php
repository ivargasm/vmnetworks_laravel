<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableArticulosNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articulos', function (Blueprint $table) {
            $table->string('titulo2')->nullable()->change();
            $table->text('articulo2')->nullable()->change();
            $table->string('imagen2')->nullable()->change();
            $table->string('titulo3')->nullable()->change();
            $table->text('articulo3')->nullable()->change();
            $table->string('imagen3')->nullable()->change();
            $table->string('titulo4')->nullable()->change();
            $table->text('articulo4')->nullable()->change();
            $table->string('imagen4')->nullable()->change();
            $table->string('titulo5')->nullable()->change();
            $table->text('articulo5')->nullable()->change();
            $table->string('imagen5')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articulos', function (Blueprint $table) {
            //
        });
    }
}
