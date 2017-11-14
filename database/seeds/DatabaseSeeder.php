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
    	$this->call(PersonaTableSeeder::class);
        $this->call(EmpresaTableSeeder::class);
        $this->call(ConstructoraTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(RendimientoTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(TrabajadorTableSeeder::class);
        $this->call(ModeloTableSeeder::class);
        $this->call(MarcaTableSeeder::class);
        $this->call(UbicacionTableSeeder::class);
        $this->call(MaquinariaTableSeeder::class);
        $this->call(TipoObraTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(ObraTableSeeder::class);
        $this->call(Forma_PagoTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(PresupuestoTableSeeder::class);
        $this->call(PartidaTableSeeder::class);
        $this->call(MaterialTableSeeder::class);
    }
}
