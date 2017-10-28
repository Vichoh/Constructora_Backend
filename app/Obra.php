<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table = 'personas';

    protected $primarykey = 'id';

    protected $fillable = ['nombre', 'direccion', 'ciudad', 'fecha', 'imagen'];

    public $timestamps = false;
}
