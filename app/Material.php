<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiales';

    protected $primarykey = 'id';

    protected $fillable = ['nombre', 'marca', 'valor', 'stock', 'descripcion', 'certificacion', 'observacion'];

    public $timestamps = false;
}
