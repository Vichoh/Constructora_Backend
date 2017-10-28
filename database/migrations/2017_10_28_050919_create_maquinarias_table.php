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
            $table->string('identificacion');
            $table->string('descripcion');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('numero_serie');
            $table->string('patente');
            $table->integer('anho');
            $table->string('estado');
            $table->integer('ubicacion_id');
            $table->integer('rendimiento_id');

            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('rendimiento_id')->references('id')->on('rendimientos')->onDelete('cascade');
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
