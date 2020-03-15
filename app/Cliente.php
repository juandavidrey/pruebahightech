<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['tarjeta_credito', 'cedula', 'nombre', 'direccion', 'telefono'];
}
