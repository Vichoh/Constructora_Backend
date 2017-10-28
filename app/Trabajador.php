<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajadores';

    protected $primarykey = 'id';

    protected $fillable = ['sueldo', ' fecha_ini', 'estado'];

    public $timestamps = false;
}
