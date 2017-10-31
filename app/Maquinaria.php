<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquinaria extends Model
{
    protected $table = 'maquinarias';

    protected $primarykey = 'id';

    protected $fillable = ['identificacion', 'descripcion', 'marca', 'modelo', 'numero_serie', 'patente', 'anho', 'estado', 'ubicacion_id', 'rendimiento_id'];

    public $timestamps = false;


    public function ubicaciones () {
    	return $this->belongsTo('App\Ubicacion');
    }

    public function rendimientos () {
    	return $this->belongsTo('App\Rendimiento');
    }

    public function maquinaria_obra () {
        return $this->hasMany('App\Maquinaria_Obra');
    }

}
