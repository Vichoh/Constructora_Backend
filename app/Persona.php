<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $primarykey = 'id';

    protected $fillable = ['rut', 'nombre', 'telefono', 'email', 'direccion', 'ciudad'];

    public $timestamps = false;

    public function trabajador () {
    	return $this->hasMany('App\Trabajador');
    } 

    public function usuario () {
    	return $this->hasMany('App\User');
    } 

    public function vendedor () {
    	return $this->hasMany('App\Vendedor');
    } 
}
