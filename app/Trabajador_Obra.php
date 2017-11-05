<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador_Obra extends Model
{
    protected $table = 'trabajadores_obra';

    protected $primarykey = 'id';

    protected $fillable = ['fecha_fin', ' fecha_ini', 'trabajador_id', 'item_id'];

    public $timestamps = false;

    public function trabajador(){
    	return $this->belongsTo('App\Trabajador');
    }

    public function item(){
    	return $this->belongsTo('App\Item');
    }
}
