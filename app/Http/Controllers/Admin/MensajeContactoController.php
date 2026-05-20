<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MensajeContacto;
use Illuminate\Http\Request;

class MensajeContactoController extends Controller
{
    public function index()
    {
        $mensajes = MensajeContacto::orderBy('created_at', 'desc')->get();
        return view('admin.mensajes.index', compact('mensajes'));
    }

    public function show($id)
    {
        $mensaje = MensajeContacto::findOrFail($id);
        if (!$mensaje->leido) {
            $mensaje->update(['leido' => true]);
        }
        return view('admin.mensajes.show', compact('mensaje'));
    }

    public function destroy($id)
    {
        $mensaje = MensajeContacto::findOrFail($id);
        $mensaje->delete();
        return redirect('/admin/mensajes')->with('success', 'Mensaje eliminado');
    }
}