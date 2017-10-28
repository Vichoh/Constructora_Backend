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
    	return $this->belongsTo('App\Maquinaria');
    }

    public function material () {
    	return $this->belongsTo('App\Material');
    }

    public function trabajador () {
    	return $this->belongsTo('App\Trabajador');
    } 
}
