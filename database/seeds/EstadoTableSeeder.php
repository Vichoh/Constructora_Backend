<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
        ['descripcion' => 'Presentado'],

        ['descripcion' => 'En estudio'],

        ['descripcion' => 'Cancelado'],

        ]);
    }
}
