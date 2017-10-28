<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquinaria extends Model
{
    protected $table = 'maquinarias';

    protected $primarykey = 'id';

    protected $fillable = ['identificacion', 'descripcion', 'marca', 'modelo', 'numero_serie', 'patente', 'anho', 'estado'];

    public $timestamps = false;
}
