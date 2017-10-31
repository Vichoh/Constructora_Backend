<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquinariasObraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinarias_obra', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->integer('maquinaria_id')->unsigned();
            $table->integer('item_id')->unsigned();

            $table->foreign('maquinaria_id')->references('id')->on('maquinarias');
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
        Schema::dropIfExists('maquinarias_obra');
    }
}
