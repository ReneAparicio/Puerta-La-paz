<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UsuarioAdmin;

class AdminAuthController extends Controller
{
    // Mostrar formulario de login
    public function showLogin()
    {
        return view('admin.login');
    }

    // Procesar login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();
            
            if (!$user->activo) {
                Auth::guard('admin')->logout();
                return back()->withErrors(['email' => 'Tu cuenta está desactivada.']);
            }

            $user->update(['ultimo_acceso' => now()]);

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Credenciales incorrectas.']);
    }

    // Dashboard según rol
    public function dashboard()
    {
        $user = Auth::guard('admin')->user();
        return view('admin.dashboard', compact('user'));
    }

    // Cerrar sesión
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}