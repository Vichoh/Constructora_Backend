<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
        ['descripcion' => 'Kobelco',],
        ['descripcion' => 'SIKA'],
        ['descripcion' => 'Topex'],
         ]);
        
    }
}
