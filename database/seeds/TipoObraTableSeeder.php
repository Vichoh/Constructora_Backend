<?php

use Illuminate\Database\Seeder;

class TipoObraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tipo_obras')->insert([
       	 ['descripcion' => 'Pavimentacion Asfaltica'],
       	 ['descripcion' => 'Pavimentacion de Hormigon'],
       	 ['descripcion' => 'Movimiento de Tierras'],
       	 ['descripcion' => 'Obras Civiles'],
      ]);
    }
}
