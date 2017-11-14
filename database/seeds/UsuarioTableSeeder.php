<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('usuarios')->insert([
        ['password' => bcrypt('admin123'),
        'confirmed' => 1,
        'constructora_id' => 1,
        'usuario' => 'shiters',],
        ['password' => bcrypt('admin321'),
        'confirmed' => 1,
        'constructora_id' => 2,
        'usuario' => 'vichoh',]
       ]);

    }
}
