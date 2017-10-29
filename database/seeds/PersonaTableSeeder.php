<?php

use Illuminate\Database\Seeder;

class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('personas')->insert([
        'rut' => '15281737-6',
        'nombre' => 'Jonathan Machuca',
        'telefono' => '65553454',
        'email' => 'j.muchca@gmail.com',
        'direccion' => 'machuca',
        'ciudad' => 'santiago',
      ]);
    }
}
