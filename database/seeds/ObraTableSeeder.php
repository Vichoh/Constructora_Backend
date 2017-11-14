<?php

use Illuminate\Database\Seeder;

class ObraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('obras')->insert([
        ['nombre' => 'Pavimentacion Centro de Justicia',
        'direccion' => 'Fco Salazar',
        'fecha_ini' => '2017-10-07',
        'fecha_fin' => '2017-12-07',
        'imagen' => '',
        'ciudad' => 'Temuco',
        'cliente_id' => '1',
        'tipo_obra_id' => '1',
        'constructora_id' => '1',],
        ['nombre' => 'Multicancha Asfaltica',
        'direccion' => 'Miraflores',
        'fecha_ini' => '2017-07-07',
        'fecha_fin' => '2017-09-07',
        'imagen' => '',
        'ciudad' => 'Temuco',
        'cliente_id' => '1',
        'tipo_obra_id' => '4',
        'constructora_id' => '2',]
      ]);
    }
}
