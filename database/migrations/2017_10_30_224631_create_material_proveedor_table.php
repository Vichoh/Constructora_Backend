<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_proveedor', function (Blueprint $table) {
            $table->integer('material_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();

            $table->foreign('material_id')->references('id')->on('materiales');
            $table->foreign('proveedor_id')->references('id')->on('proveedores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_proveedor');
    }
}
