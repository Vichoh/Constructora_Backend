<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table = 'obras';

    protected $primarykey = 'id';

    protected $fillable = ['nombre', 'direccion', 'ciudad', 'fecha', 'imagen', 'cliente_id', 'tipo_obra_id', 'constructora_id'];

    public $timestamps = false;

    public function cliente () {
    	return $this->belongsTo('App\Cliente');
    }

    public function tipo_obra () {
    	return $this->belongsTo('App\Tipo_Obra');
    }

    public function constructora () {
        return $this->belongsTo('App\Constructora');
    }

    public function presupuestos () {
    	return $this->hasMany('App\Presupuesto');
    }
}
