<?php

use Illuminate\Database\Seeder;

class RendimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rendimientos')->insert([
            ['descripcion' => '10 M2 al dia',],
            ['descripcion' => 'Para reparaciones y rellenos de grietas en espesores hasta 20 mm por capa, use una consistencia plástica agregue aprox.1,1 lts de agua por saco de 5 kg ó 6.3 lts por saco de 30 kg. .3 Kg/m2 en 2 mm de espesor.'],
            ['descripcion' => '17 lts. x saco de 25 kg. / 1,7 m2 con e'],
        ]);
    }
}
