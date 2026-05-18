<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Programa;
use App\Models\ProgramaGaleria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramaController extends Controller
{
    public function index()
    {
        $programas = Programa::all();
        return view('admin.programas.index', compact('programas'));
    }

    public function create()
    {
        return view('admin.programas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion_corta' => 'required',
            'descripcion_larga' => 'required',
        ]);

        $programa = Programa::create($request->only('nombre', 'descripcion_corta', 'descripcion_larga', 'activo'));

        if ($request->hasFile('foto_principal')) {
            $path = $request->file('foto_principal')->store('programas', 'public');
            $programa->update(['foto_principal' => $path]);
        }

        if ($request->hasFile('galeria')) {
            foreach ($request->file('galeria') as $imagen) {
                $path = $imagen->store('programas/galeria', 'public');
                ProgramaGaleria::create([
                    'programa_id' => $programa->id,
                    'imagen' => $path,
                ]);
            }
        }

        return redirect('/admin/programas')->with('success', 'Programa creado');
    }

    public function show($id)
    {
        $programa = Programa::with('galeria')->findOrFail($id);
        return view('admin.programas.show', compact('programa'));
    }

    public function edit($id)
    {
        $programa = Programa::with('galeria')->findOrFail($id);
        return view('admin.programas.edit', compact('programa'));
    }

    public function update(Request $request, $id)
    {
        $programa = Programa::findOrFail($id);
        $programa->update($request->only('nombre', 'descripcion_corta', 'descripcion_larga', 'activo'));

        if ($request->hasFile('foto_principal')) {
            Storage::disk('public')->delete($programa->foto_principal);
            $path = $request->file('foto_principal')->store('programas', 'public');
            $programa->update(['foto_principal' => $path]);
        }

        return redirect('/admin/programas')->with('success', 'Programa actualizado');
    }

    public function destroy($id)
    {
        $programa = Programa::findOrFail($id);
        Storage::disk('public')->delete($programa->foto_principal);
        foreach ($programa->galeria as $img) {
            Storage::disk('public')->delete($img->imagen);
            $img->delete();
        }
        $programa->delete();
        return redirect('/admin/programas')->with('success', 'Programa eliminado');
    }
}