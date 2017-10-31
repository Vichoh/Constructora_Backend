<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('id');
            $table->double('sueldo');
            $table->date('fecha_ini');
            $table->string('estado');
            $table->integer('rendimiento_id');
            $table->integer('area_id');
            $table->integer('persona_id');

            $table->foreign('rendimiento_id')->references('id')->on('rendimientos')->onDelete('cascade');

            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');

            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajadores');
    }
}
