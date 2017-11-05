<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquinaria_Obra extends Model
{
    protected $table = 'maquinarias_obra';

    protected $primarykey = 'id';

    protected $fillable = ['fecha_fin', ' fecha_ini', 'maquinaria_id', 'item_id'];

    public $timestamps = false;

    public function maquinaria () {
    	return $this->belongsTo('App\Maquinaria');
    }

    public function item () {
    	return $this->belongsTo('App\Item');
    }
}
