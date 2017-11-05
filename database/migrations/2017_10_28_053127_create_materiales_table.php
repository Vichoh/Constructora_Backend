<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->double('valor');
            $table->integer('stock');
            $table->text('descripcion');
            $table->string('certificacion');
            $table->string('observacion');
            $table->integer('rendimiento_id');
            $table->integer('marca_id');

            $table->foreign('rendimiento_id')->references('id')->on('rendimientos');
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
        Schema::dropIfExists('materiales');
    }
}
