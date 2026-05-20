<?php

namespace App\Http\Controllers;

use App\Models\MensajeContacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);

        MensajeContacto::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje,
            'leido' => false
        ]);

        return redirect()->back()->with('success', '¡Mensaje enviado! Nos pondremos en contacto contigo pronto.');
    }
}