<?php

use Illuminate\Database\Seeder;

class UbicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicaciones')->insert([
        'direccion' => 'Fco Salazar',
        'fecha_fin' => '2010-10-10',
         ]);
    		
    }
}
