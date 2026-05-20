<?php

namespace App\Http\Controllers;

use App\Models\Donacion;
use Illuminate\Http\Request;

class DonacionController extends Controller
{
    public function procesar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'monto' => 'required|numeric|min:1',
        ]);

        $donacion = Donacion::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'monto' => $request->monto,
            'estado' => 'pendiente',
            'requiere_comprobante' => $request->requiere_comprobante ?? false,
            'documento_identidad' => $request->documento_identidad,
            'direccion' => $request->direccion,
        ]);
        

        // Guardamos el ID en sesión para usarlo después del pago
        session(['donacion_id' => $donacion->id]);

        // El formulario se envía con el botón de PayPal, así que simplemente continuamos
        return redirect()->back();
    }
}