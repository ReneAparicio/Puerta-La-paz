<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsuarioAdmin extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios_admin';
    protected $fillable = ['nombre', 'email', 'password', 'rol', 'activo'];
    protected $hidden = ['password'];
}