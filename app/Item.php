<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $primarykey = 'id';

    protected $fillable = ['detalle', 'cantidad', 'total', 'unidad', 'partida_id'];

    public $timestamps = false;


    public function partidas () {
    	return $this->belongsTo('App\Partida');
    }

    public function maquinaria_obra () {
    	return $this->hasMany('App\Maquinaria_Obra');
    }

    public function material_obra () {
    	return $this->hasMany('App\Material_Obra');
    }

    public function trabajador_obra () {
    	return $this->hasMany('App\Trabajador_Obra');
    }
}
