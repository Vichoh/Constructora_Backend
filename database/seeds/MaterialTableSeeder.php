<?php

use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('materiales')->insert([

    		['nombre' => 'Saco 25 kg Sikalisto Mix A Multiuso mortero de sellado y nivelación',
    		'valor' => '18990',
    		'stock' => '4',
    		'descripcion' => 'El Saco Sikalisto mix A multiuso Sika 	es utilizado en diferentes trabajos de	obra gruesa como sellador de poros y en	nivelación de superficies de hormigón	. Se trata de una sustancia de fácil aplicación con la que se puede obtener un terminado homogéneo y regular que mejora la apariencia final de toda construcción.',
    		'certificacion' => 'Aprovada',
    		'observacion' => 'Aplique con llana metálica plana o espátula. Proteja del viento y sol directo',
    		'rendimiento_id' => '2',
    		'marca_id' => '2',
    		'constructora_id' => '1',],
    		['nombre' => 'Saco 20 kg Topex estuco térmico',
    		'valor' => '8990',
    		'stock' => '1',
    		'descripcion' => 'El Saco estuco térmico Topex cuenta con una fórmula especial que sirve para mantener la temperatura de cualquier construcción dentro de unos niveles adecuados a pesar de que las condiciones del clima sean extremas. Este producto de obra gruesa
    		puede ofrecer ese beneficio gracias a que es un compuesto con baja conductividad térmica',
    		'certificacion' => 'Aprovada',
    		'observacion' => 'Adilisto Estuco Térmico beneficia la menor pérdida de energía en la vivienda, como la pérdida de calor durante el invierno y en verano evita el aumento de la gradiente interior de temperatura.',
    		'rendimiento_id' => '3',
    		'marca_id' => '3',
    		'constructora_id' => '2',],
    	]);
    }
}
