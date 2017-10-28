<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $primarykey = 'id';

    protected $fillable = ['observacion'];

    public $timestamps = false;
}
