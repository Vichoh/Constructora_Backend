<?php

use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
        'rut' => '15281737-6',
        'razon_social' => 'Vimac',
        'ciudad' => 'Viña del Mar',
        'direccion' => 'Av.Bosques de Montemar 65',
        'telefono' => '(56 032) 268 00 99',
        'celular' => '+569 666 66 66',
        'fax' => '(56 032) 268 00 99',
        'email' => 'vimac@gmail.com',
        'web' => 'http://www.vimac.cl',
        'pais' => 'chile',
        'observacion' => 'Vimac con 27 años en el mercado regional y nacional cuenta hoy con una sólida trayectoria logrando ser reconocida como una empresa líder en la V Región. ',
      ]);
    }
}
