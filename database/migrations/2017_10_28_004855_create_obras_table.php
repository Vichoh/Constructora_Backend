<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->string('imagen');
            $table->string('ciudad');
            $table->integer('cliente_id')->unsigned();
            $table->integer('tipo_obra_id')->unsigned();
            $table->integer('constructora_id')->unsigned();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('tipo_obra_id')->references('id')->on('tipo_obras')->onDelete('cascade');
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
        Schema::dropIfExists('obras');
    }
}
