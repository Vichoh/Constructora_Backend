<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquinaria extends Model
{
    protected $table = 'maquinarias';

    protected $primarykey = 'id';

    protected $fillable = ['identificacion', 'descripcion', 'marca', 'modelo', 'numero_serie', 'patente', 'anho', 'estado', 'ubicacion_id', 'rendimiento_id'];

    public $timestamps = false;


    public function ubicacion () {
    	return $this->hasMany('App\Ubicacion');
    }

    public function rendimiento () {
    	return $this->hasMany('App\Rendimiento');
    }
}
