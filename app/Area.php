<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    protected $primarykey = 'id';

    protected $fillable = ['descripcion'];

    public $timestamps = false;


    public function trabajadores () {
    	return $this->hasMany('App\Trabajador');
    } 
}
