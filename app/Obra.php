<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table = 'personas';

    protected $primarykey = 'id';

    protected $fillable = ['nombre', 'direccion', 'ciudad', 'fecha', 'imagen', 'cliente_id', 'tipo_obra_id'];

    public $timestamps = false;

    public function cliente () {
    	return $this->belongsTo('App\Cliente');
    }

    public function tipos_Obra () {
    	return $this->belongsTo('App\Tipo_Obra');
    }

    public function presupuestos () {
    	return $this->hasMany('App\Presupuesto');
    }
}
