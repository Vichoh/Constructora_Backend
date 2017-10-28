<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $primarykey = 'id';

    protected $fillable = ['observacion', 'vendedor_id', 'empresa_id'];

    public $timestamps = false;


    public function vendedor () {

    	return $this->hasOne('App\Vendedor');
    }

    public function empresa () {

    	return $this->hasOne('App\Empresa');
    }
}
