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
            $table->double('sueldo')->nullable();
            $table->date('fecha_ini')->required();
            $table->string('estado')->required();
            $table->integer('rendimiento_id')->unsigned();
            $table->integer('area_id')->unsigned();
            $table->integer('persona_id')->required()->unique()->unsigned();
            $table->integer('constructora_id')->unsigned();

            $table->foreign('rendimiento_id')->references('id')->on('rendimientos')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('constructora_id')->references('id')->on('constructoras');
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
