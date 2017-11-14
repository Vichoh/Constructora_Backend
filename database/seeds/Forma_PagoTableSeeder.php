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
        ['detalle' => 'Anticipo + Pago de saldo a 30 días'],
        ['detalle' => 'Anticipo + EP pagadero a 15 días por cada etapa cumplida'],
        ['detalle' => 'Anticipo 70% + Saldo de 30% pagadero a máx 30 días (documentado)'],
        ['detalle' => 'Pago a 30 días contra entrega de factura']

        ]);
    }
}
