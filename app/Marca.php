<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    protected $primarykey = 'id';

    protected $fillable = ['descripcion'];

    public $timestamps = false;

    public function maquinarias () {
    	return $this->hasMany('App\Maquinaria');
    }

    public function materiales () {
    	return $this->hasMany('App\Material');
    }
}
