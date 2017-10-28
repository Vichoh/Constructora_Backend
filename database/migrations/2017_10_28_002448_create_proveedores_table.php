<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('observacion');
            $table->integer('vendedor_id')->unsigned();
            $table->integer('empresa_id')->unsigned();

            $table->foreign('vendedor_id')->references('id')->on('vendedores');
            $table->foreign('empresa_id')->references('id')->on('empresas');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
