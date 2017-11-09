<?php

use Illuminate\Database\Seeder;

class TrabajadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trabajadores')->insert([
        'sueldo' => '9999999',
        'fecha_ini' => '2017-10-30',
        'estado' => 'En Obra',
        'rendimiento_id' => 1,
        'area_id' => 1,
        'persona_id' => 1,
        'constructora_id' => 1,
       ]);
    }
}
