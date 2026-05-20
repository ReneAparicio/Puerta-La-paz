<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComprobanteDonacion extends Model
{
    protected $table = 'comprobantes_donacion';

    protected $fillable = [
        'donacion_id', 'numero_comprobante', 'serie',
        'nit_emisor', 'nombre_emisor', 'fecha_emision',
        'monto', 'resolucion_numero', 'codigo_unico'
    ];

    public function donacion()
    {
        return $this->belongsTo(Donacion::class);
    }
}