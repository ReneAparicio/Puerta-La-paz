<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    protected $table = 'donaciones';

    protected $fillable = [
    'nombre', 'email', 'telefono', 'monto', 'estado',
    'requiere_comprobante', 'documento_identidad', 'direccion', 'transaccion_id'
];
}