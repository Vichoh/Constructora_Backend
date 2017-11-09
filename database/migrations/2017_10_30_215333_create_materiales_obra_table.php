<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialesObraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales_obra', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->integer('material_id')->unsigned();
            $table->integer('item_id')->unsigned();


            $table->foreign('material_id')->references('id')->on('materiales');
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
        Schema::dropIfExists('materiales_obra');
    }
}
