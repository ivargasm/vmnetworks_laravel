<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('extracto');
            $table->timestamp('fecha');
            $table->text('articulo');
            $table->string('imagen');
            $table->string('titulo2');
            $table->text('articulo2');
            $table->string('imagen2');
            $table->string('titulo3');
            $table->text('articulo3');
            $table->string('imagen3');
            $table->string('titulo4');
            $table->text('articulo4');
            $table->string('imagen4');
            $table->string('titulo5');
            $table->text('articulo5');
            $table->string('imagen5');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::drop('articulos');
    }
}
