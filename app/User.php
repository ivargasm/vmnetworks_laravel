<?php

namespace vmnetworks;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','ocupacion','descripcion','descripcion2','foto','nacionalidad','perfil_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }*/

    public function setFotoAttribute($foto){
        if(!empty($foto)){
            $name = Carbon::now()->second.$foto->getClientOriginalName();
            $this->attributes['foto'] = $name;
            \Storage::disk('avatar')->put($name, \File::get($foto));
        }
    }
}
