<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';

    protected $primarykey = 'id';

    protected $fillable = ['descripcion', 'proveedor_id'];

    public $timestamps = false;


    public function persona () {

    	return $this->hasOne('App\Persona');
    }

    public function proveedor () {
    	return $this->belongsTo('App\Proveedor');
    }
}
