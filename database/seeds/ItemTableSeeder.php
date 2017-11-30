<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
        ['detalle' => '1Riego de liga (CSS-1h); c/ suministros',
        'cantidad' => '2300',
        'total' => '1495000',
        'unidad' => 'm2',
        'partida_id' => '1',],
        ['detalle' => 'Tratamiento de grietas; sólo calle Lastra (30%)                      ',
        'cantidad' => '521',
        'total' => '468900',
        'unidad' => 'm2',
        'partida_id' => '2',],

         ]);
        
    }
}
