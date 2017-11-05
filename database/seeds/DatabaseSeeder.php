<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$this->call(PersonaTableSeeder::class);
        //$this->call(UsuarioTableSeeder::class);
        $this->call(RendimientoTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(TrabajadorTableSeeder::class);
    }
}
