<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $primarykey = 'id';

    protected $fillable = ['observacion', 'empresa_id'];

    public $timestamps = false;


    public  function empresa() {
    	return $this->hasOne('App\Empresa');
    }

    public function obra () {
    	return $this->belongsTo('App\Obra');
    }
}
