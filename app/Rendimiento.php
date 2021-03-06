<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendimiento extends Model
{
    protected $table = 'rendimientos';

    protected $primarykey = 'id';

    protected $fillable = ['descripcion'];

    public $timestamps = false;

    public function maquinarias () {
    	return $this->hasMany('App\Maquinaria');
    }

    public function materiales () {
    	return $this->hasMany('App\Material');
    }

    public function trabajadores () {
    	return $this->hasMany('App\Trabajador');
    } 
}
