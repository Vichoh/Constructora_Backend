<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material_Obra extends Model
{
    protected $table = 'materiales_obra';

    protected $primarykey = 'id';

    protected $fillable = ['fecha_fin', ' fecha_ini', 'material_id', 'item_id'];

    public $timestamps = false;

    public function materiale(){
    	return $this->belongsTo('App\Material');
    }

    public function item(){
    	return $this->belongsTo('App\Item');
    }
}
