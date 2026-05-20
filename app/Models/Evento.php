<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha',
        'hora',
        'lugar',
        'cupo',
        'imagen',
        'activo'
    ];
}