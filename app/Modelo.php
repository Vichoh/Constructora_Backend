<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = 'modelos';

    protected $primarykey = 'id';

    protected $fillable = ['descripcion'];

    public $timestamps = false;

    public function maquinarias () {
    	return $this->hasMany('App\Maquinaria');
    }
}
