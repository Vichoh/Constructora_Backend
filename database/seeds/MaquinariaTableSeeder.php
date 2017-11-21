<?php

use Illuminate\Database\Seeder;

class MaquinariaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maquinarias')->insert([
        ['identificacion' => 'ARRASTRADORES DE TRONCOS',
        'descripcion' => 'Maquinaria pesada',
        'marca_id' => 1,
        'modelo_id' => 1,
        'numero_serie' => 333333333,
        'patente' => 'FG 22 22',
        'anho' => '2010',
        'ubicacion_id' => 1,
        'rendimiento_id' => 1,
        'constructora_id' => 1,],
         ['identificacion' => 'ARRASTRADORES DE TRONCOS2',
        'descripcion' => 'Maquinaria pesada2',
        'marca_id' => 1,
        'modelo_id' => 1,
        'numero_serie' => 444444,
        'patente' => 'FG 22 33',
        'anho' => '2010',
        'ubicacion_id' => 1,
        'rendimiento_id' => 1,
        'constructora_id' => 2,]
         ]);
        
    }
}
