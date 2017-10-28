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

    public function rendimiento () {
    	return $this->hasMany('App\Rendimiento');
    }

    public function area () {
    	return $this->hasMany('App\Area');
    }
}
