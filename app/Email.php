<?php

namespace vmnetworks;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails';

    protected $fillable = ['nombre','telefono','correo','mensaje'];
}
