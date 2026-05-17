<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = [
        'nombre', 'descripcion_corta', 'descripcion_larga', 'foto_principal', 'activo'
    ];

    // Relación con la galería
    public function galeria()
    {
        return $this->hasMany(ProgramaGaleria::class);
    }
}