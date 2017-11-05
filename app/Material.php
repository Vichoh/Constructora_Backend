<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiales';

    protected $primarykey = 'id';

    protected $fillable = ['nombre',  'valor', 'stock', 'descripcion', 'certificacion', 'observacion', 'rendimiento_id', 'marca_id'];

    public $timestamps = false;
    

    public function rendimientos(){

    	return $this->belongsTo('App\Rendimiento');
    }

    public function material_obra () {
    	return $this->hasMany('App\Material_Obra');
    }

    public function proveedores () {
    	return $this->belongsToMany('App\Proveedor');
    }

    public function marca () {
        return $this->belongsTo('App\Marca');
    }
}
