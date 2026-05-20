<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('admin.eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('admin.eventos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required|date',
            'hora' => 'required',
            'lugar' => 'required',
            'cupo' => 'required|integer|min:1',
        ]);

        $evento = Evento::create($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('eventos', 'public');
            $evento->update(['imagen' => $path]);
        }

        return redirect('/admin/eventos')->with('success', 'Evento creado');
    }

    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        return view('admin.eventos.edit', compact('evento'));
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->update($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            if ($evento->imagen) {
                Storage::disk('public')->delete($evento->imagen);
            }
            $path = $request->file('imagen')->store('eventos', 'public');
            $evento->update(['imagen' => $path]);
        }

        return redirect('/admin/eventos')->with('success', 'Evento actualizado');
    }

    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        if ($evento->imagen) {
            Storage::disk('public')->delete($evento->imagen);
        }
        $evento->delete();
        return redirect('/admin/eventos')->with('success', 'Evento eliminado');
    }
}