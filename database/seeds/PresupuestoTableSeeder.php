<?php

use Illuminate\Database\Seeder;

class PresupuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('presupuestos')->insert([
    		['vigencia' => '30',
    		'fecha_envio' => '2017-07-10',
    		'periodo_control' => 'cada 20 dias',
    		'obra_id' => '1',
    		'forma_pago_id' => '1',
    		'estado_id' => '1',
    		'descripcion' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim',],
    		['vigencia' => '60',
    		'fecha_envio' => '2017-07-11',
    		'periodo_control' => 'cada 30 dias',
    		'obra_id' => '2',
    		'forma_pago_id' => '2',
    		'estado_id' => '3',
    		'descripcion' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim',],

    	]);
    }
  }
