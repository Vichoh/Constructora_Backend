<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajadores';

    protected $primarykey = 'id';

    protected $fillable = ['sueldo', ' fecha_ini', 'estado', 'persona_id', 'rendimiento_id', 'area_id'];

    public $timestamps = false;



    public function persona () {
    	return $this->belongsTo('App\Persona');
    }

    public function rendimientos () {
    	return $this->belongsTo('App\Rendimiento');
    }

    public function areas () {
    	return $this->belongsTo('App\Area');
    }

    public function trabajador_obra () {
        return $this->hasMany('App\Trabajador_Obra');
    }
}
