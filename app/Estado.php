<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';

    protected $primarykey = 'id';

    protected $fillable = ['descripcion'];

    public $timestamps = false;

    public function presupuestos () {
    	return $this->hasMany('App\Presupuesto');
    }
}
