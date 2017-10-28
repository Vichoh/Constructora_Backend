<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $primarykey = 'id';

    protected $fillable = ['detalle', 'cantidad', 'total', 'unidad'];

    public $timestamps = false;
}
