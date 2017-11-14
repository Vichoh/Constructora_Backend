<?php

use Illuminate\Database\Seeder;

class ConstructoraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('constructoras')->insert([
        ['empresa_id' => '3',],
        ['empresa_id' => '4'],
      	]);
    }
}
