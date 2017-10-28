<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    protected $table = 'partidas';

    protected $primarykey = 'id';

    protected $fillable = ['detalle', 'valor_neto', 'iva', 'total_final', 'descripcion', 'dia_inicio', 'dia_fin', 'presupuesto_id'];

    public $timestamps = false;


    public function presupuesto () {
    	return $this->hasMany('App\Presupuesto');
    }

    public function item () {
    	return $this->belongsTo('App\Item');
    }
}
