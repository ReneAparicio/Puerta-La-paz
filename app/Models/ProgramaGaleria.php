<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramaGaleria extends Model
{
    protected $table = 'programas_galeria';  // 👈 ESTA LÍNEA ES LA CLAVE

    protected $fillable = ['programa_id', 'imagen', 'orden'];

    public function programa()
    {
        return $this->belongsTo(Programa::class);
    }
}