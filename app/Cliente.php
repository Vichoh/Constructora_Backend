<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $primarykey = 'id';

    protected $fillable = ['observacion', 'empresa_id'];

    public $timestamps = false;


    public  function empresa () {
    	return $this->belongsTo('App\Empresa');
    }

    public function obras () {
    	return $this->hasMany('App\Obra');
    }
}
