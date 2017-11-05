<?php

use Illuminate\Database\Seeder;

class MaquinariaObraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maquinarias_obra')->insert([
        'maquinaria_id' => '1',
        'item_id' => '1',
         ]);
    }
}
