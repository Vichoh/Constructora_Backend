<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $primarykey = 'id';

    protected $fillable = ['rut', 'razon_social', 'celular', 'telefono', 'email', 'direccion', 'ciudad', 'fax', 'pais', 'web'];

    public $timestamps = false;


    public function cliente () {
    	return $this->belongsTo('App\Cliente');
    }


    public function proveedor () {
    	return $this->belongsTo('App\Proveedor');
    }
}
