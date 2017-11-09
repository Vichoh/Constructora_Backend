<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquinariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinarias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificacion')->required()->unique();
            $table->text('descripcion')->nullable();
            $table->integer('numero_serie')->required()->unique();
            $table->string('patente')->required()->unique();
            $table->integer('anho')->nullable();
            $table->integer('ubicacion_id')->unsigned()->nullable();
            $table->integer('rendimiento_id')->unsigned()->nullable();
            $table->integer('modelo_id')->unsigned()->nullable();
            $table->integer('marca_id')->unsigned()->required();
            $table->integer('constructora_id')->unsigned()->nullable();

            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('rendimiento_id')->references('id')->on('rendimientos');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->foreign('marca_id')->references('id')->on('marcas');
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
        Schema::dropIfExists('maquinarias');
    }
}
