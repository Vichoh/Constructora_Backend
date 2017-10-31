<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajadores';

    protected $primarykey = 'id';

    protected $fillable = ['sueldo', ' fecha_ini', 'estado'];

    public $timestamps = false;



    public function persona () {
    	return $this->hasOne('App\Persona');
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
