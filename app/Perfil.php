<?php

namespace vmnetworks;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';

    protected $fillable = ['clave','descripcion'];
}
