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
    	return $this->belongsTo('App\Trabajador');
    } 

    public function usuario () {
    	return $this->belongsTo('App\User');
    } 

    public function vendedor () {
    	return $this->belongsTo('App\Vendedor');
    } 
}
