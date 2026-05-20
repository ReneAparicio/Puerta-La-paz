<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donacion;
use App\Models\ComprobanteDonacion;
use Barryvdh\DomPDF\Facade\Pdf; // 👈 Agregar esta línea
use Illuminate\Http\Request;

class DonacionController extends Controller
{
    // Listar todas las donaciones
    public function index()
    {
        $donaciones = Donacion::orderBy('created_at', 'desc')->get();
        return view('admin.donaciones.index', compact('donaciones'));
    }

    // Ver detalle de una donación
    public function show($id)
    {
        $donacion = Donacion::findOrFail($id);
        return view('admin.donaciones.show', compact('donacion'));
    }

    // Actualizar una donación (cambiar estado)
    public function update(Request $request, $id)
    {
        $donacion = Donacion::findOrFail($id);
        $donacion->update(['estado' => $request->estado]);
        return redirect()->back()->with('success', 'Estado actualizado');
    }

    // Eliminar una donación
    public function destroy($id)
    {
        $donacion = Donacion::findOrFail($id);
        $donacion->delete();
        return redirect('/admin/donaciones')->with('success', 'Donación eliminada');
    }

    // Emitir comprobante fiscal y descargar PDF
public function emitirComprobante($id)
{
    $donacion = Donacion::findOrFail($id);

    // Solo se puede emitir si el donante pidió comprobante
    if (!$donacion->requiere_comprobante) {
        return redirect()->back()->with('error', 'Esta donación no requiere comprobante fiscal.');
    }

    // Solo si está completada
    if ($donacion->estado !== 'completada') {
        return redirect()->back()->with('error', 'La donación debe estar completada para emitir comprobante.');
    }

    // Si ya tiene comprobante emitido, solo descargar el PDF existente
    if ($donacion->comprobante_emitido && $donacion->numero_comprobante) {
        $comprobante = ComprobanteDonacion::where('donacion_id', $donacion->id)->first();
        $pdf = Pdf::loadView('pdf.comprobante', compact('donacion', 'comprobante'));
        return $pdf->download('comprobante_' . $donacion->numero_comprobante . '.pdf');
    }

    // Si no tiene número asignado, se lo asignamos ahora
    if (!$donacion->numero_comprobante) {
        $ultimo = ComprobanteDonacion::orderBy('id', 'desc')->first();
        if ($ultimo) {
            preg_match('/(\d+)$/', $ultimo->numero_comprobante, $matches);
            $siguiente = intval($matches[1]) + 1;
            $numero = 'PP' . str_pad($siguiente, 4, '0', STR_PAD_LEFT);
        } else {
            $numero = 'PP0001';
        }
        $donacion->update(['numero_comprobante' => $numero]);
    }

    // Crear el comprobante en la tabla comprobantes_donacion
    $comprobante = ComprobanteDonacion::create([
        'donacion_id' => $donacion->id,
        'numero_comprobante' => $donacion->numero_comprobante,
        'serie' => 'PP2026-001 al PP2026-050',
        'nit_emisor' => '0614-123456-101-9',
        'nombre_emisor' => 'IGLESIA PUERTA DE PAZ',
        'fecha_emision' => now(),
        'monto' => $donacion->monto,
        'resolucion_numero' => 'RES-PP-2026-001',
        'codigo_unico' => 'PUERTA-PAZ-2026'
    ]);

    $donacion->update(['comprobante_emitido' => true]);

    $pdf = Pdf::loadView('pdf.comprobante', compact('donacion', 'comprobante'));
    return $pdf->download('comprobante_' . $donacion->numero_comprobante . '.pdf');
}
}