<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['email', 'nombre_usuario', 'password'];
}
