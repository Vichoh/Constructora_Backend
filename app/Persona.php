<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $primarykey = 'id';

    protected $fillable = ['rut', 'nombre', 'telefono', 'email', 'direccion', 'ciudad'];

    public $timestamps = false;

    public function trabajadores () {
    	return $this->hasMany('App\Trabajador');
    } 


    public function vendedores () {
    	return $this->hasMany('App\Vendedor');
    } 
}
