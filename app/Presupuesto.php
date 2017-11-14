<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $table = 'presupuestos';

    protected $primarykey = 'id';

    protected $fillable = ['vigencia', 'descripcion', 'fecha_envio', 'periodo_control', 'obra_id', 'forma_pago_id', 'estado_id'];

    public $timestamps = false;
    

    public function obra () {
    	return $this->belongsTo('App\Obra');
    }

    public function forma_pago () {

    	return $this->belongsTo('App\Forma_Pago');
    }

    public function estado () {
        return $this->belongsTo('App\Estado');
    }

    public function partidas () {
        return $this->hasMany('App\Partida');
    }
}
