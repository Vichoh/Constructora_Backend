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
        'descripcion' => '10 M2 al dia',
       ]);
    }
}
