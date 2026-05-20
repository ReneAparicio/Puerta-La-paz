<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Predica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PredicaController extends Controller
{
    public function index()
    {
        $predicas = Predica::orderBy('fecha', 'desc')->get();
        return view('admin.predicas.index', compact('predicas'));
    }

    public function create()
    {
        return view('admin.predicas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'predicador' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required|date',
        ]);

        $predica = Predica::create($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('predicas', 'public');
            $predica->update(['imagen' => $path]);
        }

        return redirect('/admin/predicas')->with('success', 'Prédica creada');
    }

    public function edit($id)
    {
        $predica = Predica::findOrFail($id);
        return view('admin.predicas.edit', compact('predica'));
    }

    public function update(Request $request, $id)
    {
        $predica = Predica::findOrFail($id);
        $predica->update($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            if ($predica->imagen) {
                Storage::disk('public')->delete($predica->imagen);
            }
            $path = $request->file('imagen')->store('predicas', 'public');
            $predica->update(['imagen' => $path]);
        }

        return redirect('/admin/predicas')->with('success', 'Prédica actualizada');
    }

    public function destroy($id)
    {
        $predica = Predica::findOrFail($id);
        if ($predica->imagen) {
            Storage::disk('public')->delete($predica->imagen);
        }
        $predica->delete();
        return redirect('/admin/predicas')->with('success', 'Prédica eliminada');
    }
}