<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table = 'usuarios';

    protected $primaryKey = 'id';

    protected $fillable = [
        'password','confirmation_code', 'confirmed', 'usuario', 'persona_id'

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function persona () {
        return $this->belongsTo('App\Persona');
    }
}