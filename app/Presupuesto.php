<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $table = 'presupuestos';

    protected $primarykey = 'id';

    protected $fillable = ['vigencia', 'estado', 'descripcion', 'fecha_envio', 'clasificacion', 'periodo_control'];

    public $timestamps = false;
}
