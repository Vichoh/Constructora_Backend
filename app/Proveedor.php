<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $primarykey = 'id';

    protected $fillable = ['observacion'];

    public $timestamps = false;
}
