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
        ['rut' => '15281737-6',
        'razon_social' => 'Vimac',
        'ciudad' => 'Viña del Mar',
        'direccion' => 'Av.Bosques de Montemar 65',
        'telefono' => '(56 032) 268 00 99',
        'celular' => '+569 666 66 66',
        'fax' => '(56 032) 268 00 99',
        'email' => 'vimac@gmail.com',
        'web' => 'http://www.vimac.cl',
        'pais' => 'chile',
        'observacion' => 'Vimac con 27 años en el mercado regional y nacional cuenta hoy con una sólida trayectoria logrando ser reconocida como una empresa líder en la V Región. ',],
        ['rut' => '50555222-k',
        'razon_social' => 'Sodimac',
        'ciudad' => 'Santiago',
        'direccion' => 'Av.Bosques de Montemar 65',
        'telefono' => '600 600 1230',
        'celular' => '600 600 1230',
        'fax' => '600 600 1230',
        'email' => 'josegonzalez@sodimac.cl',
        'web' => 'http://www.sodimac.cl',
        'pais' => 'chile',
        'observacion' => 'Sodimac es una empresa que opera en el retail, industria donde ha alcanzado una posición de liderazgo en el mercado de tiendas para el mejoramiento del hogar. Su actividad se focaliza en desarrollar ',],
        ['rut' => '123412312-k',
        'razon_social' => 'Pavicret',
        'ciudad' => 'Santiago',
        'direccion' => 'Calle Llano Subercaseaux 3629, Of. 704 San Miguel',
        'telefono' => '+56 2 2556 9269',
        'celular' => '+56 2 2556 8690',
        'fax' => '+56 2 2556 8690',
        'email' => 'contacto@pavicret.cl',
        'web' => 'http://www.pavicret.cl',
        'pais' => 'Chile',
        'observacion' => 'Pavicret es una empresa constructora con más de 30 años de experiencia en el campo de la pavimentación.
          Fundada de modo familiar, nuestra compañía fue creada  '],
        ['rut' => '50000000-k',
        'razon_social' => 'Asfaltec',
        'ciudad' => 'Curico',
        'direccion' => 'Camino a lansa Km 0,5 ',
        'telefono' => '(075 2545307)',
        'celular' => '(075 2545307)',
        'fax' => '(075 2545307)',
        'email' => 'info@asfaltec.cl',
        'web' => 'http://www.asfaltec.cl/somos.html',
        'pais' => 'Chile',
        'observacion' => 'Asfaltec, empresa con casa matriz en Curicó, cuyo servicio se basa en la producción de mezclas asfálticas en caliente de alto desempeño']
      ]);
    }
}
