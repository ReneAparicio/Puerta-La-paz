<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UsuarioAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioAdminController extends Controller
{
    public function index()
    {
        $usuarios = UsuarioAdmin::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('admin.usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:usuarios_admin',
            'password' => 'required|min:6',
            'rol' => 'required|in:admin,editor,supervisor',
        ]);

        UsuarioAdmin::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol' => $request->rol,
            'activo' => $request->has('activo'),
        ]);

        return redirect('/admin/usuarios')->with('success', 'Administrador creado');
    }

    public function edit($id)
    {
        $usuario = UsuarioAdmin::findOrFail($id);
        return view('admin.usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = UsuarioAdmin::findOrFail($id);

        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:usuarios_admin,email,' . $id,
            'rol' => 'required|in:admin,editor,supervisor',
        ]);

        $data = [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'rol' => $request->rol,
            'activo' => $request->has('activo'),
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $usuario->update($data);

        return redirect('/admin/usuarios')->with('success', 'Administrador actualizado');
    }

    public function destroy($id)
    {
        $usuario = UsuarioAdmin::findOrFail($id);
        
        // No permitir eliminar el propio usuario
        if ($usuario->id == auth()->guard('admin')->id()) {
            return redirect('/admin/usuarios')->with('error', 'No puedes eliminar tu propia cuenta');
        }

        $usuario->delete();
        return redirect('/admin/usuarios')->with('success', 'Administrador eliminado');
    }
}