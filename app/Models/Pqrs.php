<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pqrs extends Model
{
    protected $fillable = [
        'nombres',
        'apellidos',
        'correo',
        'nacionalidad',
        'tipo_documento',
        'numero_documento',
        'tipo_pago',
        'tipo',
        'mensaje',
        'acepto'
    ];
}


