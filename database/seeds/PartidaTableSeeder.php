<?php

use Illuminate\Database\Seeder;

class PartidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('partidas')->insert([
    		['valor_neto' => '14973000',
    		'detalle' => 'Partida 1',
    		'iva' => '2844870',
    		'total_final' => '17817870',
    		'dia_ini' => '2017-03-06',
    		'dia_fin' => '2017-03-26',
    		'presupuesto_id' => '1',
    		'descripcion' => 'Esta opción incluye todo lo necesario para la ejecución de una carpeta asfáltica en espeso promedio de 3,5 a 4,0 cm espesor compactado.',],
    		['valor_neto' => '4370000',
    		'detalle' => 'Partida 2',
    		'iva' => '830300',
    		'total_final' => '5200300',
    		'dia_ini' => '2017-03-06',
    		'dia_fin' => '2017-03-26',
    		'presupuesto_id' => '1',
    		'descripcion' => 'Esta opción incluye en parte lo necesario para la ejecución de una carpeta asfáltica en espesorpromedio de 3,5 a 4,0 cm espesor compactado.',],

    	]);
    }
  }
