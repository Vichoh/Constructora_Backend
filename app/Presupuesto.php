<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $table = 'presupuestos';

    protected $primarykey = 'id';

    protected $fillable = ['vigencia', 'estado', 'descripcion', 'fecha_envio', 'clasificacion', 'periodo_control', 'obra_id', 'forma_pago_id'];

    public $timestamps = false;
    

    public function obra () {
    	return $this->hasMany('App\Obra');
    }

    public function forma_pago () {

    	return $this->hasMany('App\Forma_Pago');
    }
}
