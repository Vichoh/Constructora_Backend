<?php

use Illuminate\Database\Seeder;

class Forma_PagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formas_pagos')->insert([
        'detalle' => 'Anticipo + Pago de saldo a 30 días',
       
    }
}
