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
        'identificacion' => '15281737-6',
        'descripcion' => 'Vimac',
        'marca' => 'Viña del Mar',
        'modelo' => 'Av.Bosques de Montemar 65',
        'numero_serie' => '(56 032) 268 00 99',
        'patente' => '+569 666 66 66',
        'anho' => '(56 032) 268 00 99',
        'ubicacion_id' => 'http://www.vimac.cl',
        'rendimiento' => 'chile',
       
    }
}
