<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $primarykey = 'id';

    protected $fillable = ['detalle', 'cantidad', 'total', 'unidad', 'partida_id'];

    public $timestamps = false;


    public function partida () {
    	return $this->belongsTo('App\Partida');
    }

    public function maquinarias_obra () {
    	return $this->hasMany('App\Maquinaria_Obra');
    }

    public function materiales_obra () {
    	return $this->hasMany('App\Material_Obra');
    }

    public function trabajadores_obra () {
    	return $this->hasMany('App\Trabajador_Obra');
    }
}
