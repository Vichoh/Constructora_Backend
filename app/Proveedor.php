<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $primarykey = 'id';

    protected $fillable = ['observacion',  'empresa_id'];

    public $timestamps = false;


    public function vendedores () {

    	return $this->hasMany('App\Vendedor');
    }

    public function empresa () {

    	return $this->belongsTo('App\Empresa');
    }

    public function materiales () {
        return $this->belongsToMany('App\Material');
    }
}
