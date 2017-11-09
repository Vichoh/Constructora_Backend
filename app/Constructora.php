<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constructora extends Model
{
    protected $table = 'constructoras';

    protected $primarykey = 'id';

    protected $fillable = ['empresa_id'];

    public $timestamps = false;


    public function empresa () {
    	return $this->belongsTo('App\Empresa');
    }

    public function usuarios () {
    	return $this->hasMany('App\Usuario');
    } 

    public function obras () {
    	return $this->hasMany('App\Obra');
    }


    public function materiales () {
    	return $this->hasMany('App\Material');
    }


    public function maquinarias () {
    	return $this->hasMany('App\Maquinaria');
    }

    public function trabajadores () {
    	return $this->hasMany('App\Trabajador');
    }
}
