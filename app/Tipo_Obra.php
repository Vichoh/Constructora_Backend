<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Obra extends Model
{
    protected $table = 'tipo_obras';

    protected $primarykey = 'id';

    protected $fillable = ['descripcion'];

    public $timestamps = false;


     public function obras () {
    	return $this->hasMany('App\Obra');
    }
}
