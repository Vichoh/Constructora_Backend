<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquinaria extends Model
{
    protected $table = 'maquinarias';

    protected $primarykey = 'id';

    protected $fillable = ['identificacion', 'descripcion', 'numero_serie', 'patente', 'anho', 'ubicacion_id', 'rendimiento_id', 'modelo_id', 'marca_id', 'constructora_id'];

    public $timestamps = false;


    public function ubicacion () {
    	return $this->belongsTo('App\Ubicacion');
    }

    public function rendimiento () {
    	return $this->belongsTo('App\Rendimiento');
    }

    public function maquinarias_obra () {
        return $this->hasMany('App\Maquinaria_Obra');
    }

    public function modelo () {
        return $this->belongsTo('App\Modelo');
    }

    public function marca () {
        return $this->belongsTo('App\Marca');
    }

    public function constructora () {
        return $this->belongsTo('App\Constructora');
    }

}
