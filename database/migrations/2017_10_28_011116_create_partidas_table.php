<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detalle');
            $table->double('valor_neto', 8 ,2);
            $table->double('iva', 8, 2);
            $table->double('total_final', 8, 2);
            $table->text('descripcion');
            $table->date('dia_ini');
            $table->date('dia_fin');
            $table->integer('presupuesto_id');

            $table->foreign('presupuesto_id')->references('id')->on('presupuestos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidas');
    }
}
