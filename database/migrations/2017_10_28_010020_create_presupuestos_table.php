<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vigencia');
            $table->string('estado');
            $table->string('descripcion');
            $table->date('fecha_envio');
            $table->string('clasificacion');
            $table->string('periodo_control');
            $table->integer('obras_id')->unsigend();
            $table->integer('forma_pago_id')->unsigned();

            $table->foreign('obras_id')->references('id')->on('obras')->onDelete('cascade');
            $table->foreign('forma_pago_id')->references('id')->on('formas_pagos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presupuestos');
    }
}
