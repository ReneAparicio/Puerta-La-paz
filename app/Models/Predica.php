<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Predica extends Model
{
    protected $table = 'predicas';

    protected $fillable = [
        'titulo', 'predicador', 'descripcion', 'contenido',
        'video_url', 'audio_url', 'imagen', 'fecha', 'activo'
    ];
}