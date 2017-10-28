<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forma_Pago extends Model
{
    protected $table = 'formas_pagos';

    protected $primarykey = 'id';

    protected $fillable = ['detalle'];

    public $timestamps = false;
}
