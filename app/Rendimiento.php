<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendimiento extends Model
{
    protected $table = 'rendimientos';

    protected $primarykey = 'id';

    protected $fillable = ['descripcion'];

    public $timestamps = false;
}
