<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
		protected $table = 'ubicaciones';

    protected $primarykey = 'id';

    protected $fillable = ['direccion', 'fecha_fin'];

    public $timestamps = false;
}
