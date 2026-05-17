<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UsuarioAdmin;
use Illuminate\Support\Facades\Hash;

class UsuarioAdminSeeder extends Seeder
{
    public function run()
    {
        UsuarioAdmin::create([
            'nombre' => 'Administrador',
            'email' => 'admin@puertadepaz.com',
            'password' => Hash::make('admin123'),
            'rol' => 'admin',
            'activo' => true
        ]);
    }
}