<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $primarykey = 'id';

    protected $fillable = ['rut', 'razon_social', 'celular', 'telefono', 'email', 'direccion', 'ciudad', 'fax', 'pais', 'web', 'observacion'];

    public $timestamps = false;


    public function clientes () {
    	return $this->hasMany('App\Cliente');
    }


    public function proveedores () {
    	return $this->hasMany('App\Proveedor');
    }
}
