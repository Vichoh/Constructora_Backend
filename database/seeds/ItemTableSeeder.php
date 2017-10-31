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
        'detalle' => '15281737-6',
        'cantidad' => 'Vimac',
        'total' => 'Viña del Mar',
        'unidad' => 'Av.Bosques de Montemar 65',
        'partida_id' => '(56 032) 268 00 99',
    
        
    }
}
