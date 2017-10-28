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
    	return $this->hasMany('App\Cliente');
    }

    public function tipo_Obra () {
    	return $this->hasMany('App\Tipo_Obra');
    }

    public function presupuesto () {
    	return $this->belongsTo('App\Presupuesto');
    }
}
