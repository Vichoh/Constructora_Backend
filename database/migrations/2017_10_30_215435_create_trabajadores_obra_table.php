x<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadoresObraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores_obra', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->integer('trabajador_id')->unsigned();
            $table->integer('item_id')->unsigned();

            $table->foreign('trabajador_id')->references('id')->on('trabajadores');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajadores_obra');
    }
}
