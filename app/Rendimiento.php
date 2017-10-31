<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendimiento extends Model
{
    protected $table = 'rendimientos';

    protected $primarykey = 'id';

    protected $fillable = ['descripcion'];

    public $timestamps = false;

    public function maquinaria () {
    	return $this->hasMany('App\Maquinaria');
    }

    public function material () {
    	return $this->hasMany('App\Material');
    }

    public function trabajador () {
    	return $this->hasMany('App\Trabajador');
    } 
}
