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
            $table->text('descripcion');
            $table->integer('numero_serie');
            $table->string('patente');
            $table->integer('anho');
            $table->integer('ubicacion_id');
            $table->integer('rendimiento_id');
            $table->integer('modelo_id');
            $table->integer('marca_id');

            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('rendimiento_id')->references('id')->on('rendimientos');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->foreign('marca_id')->references('id')->on('marcas');

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
