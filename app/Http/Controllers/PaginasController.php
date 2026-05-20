<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\Predica;  

class PaginasController extends Controller
{
    public function ministerios()
    {
        return view('ministerios');
    }

    public function eventos()
    {
    $eventos = \App\Models\Evento::where('activo', true)
                ->orderBy('fecha', 'asc')
                ->get();
    return view('eventos', compact('eventos'));
    }

    public function predicas()
{
    $predicas = \App\Models\Predica::where('activo', true)
                ->orderBy('fecha', 'desc')
                ->get();
    return view('predicas', compact('predicas'));
}

public function predicaShow($id)
{
    $predica = \App\Models\Predica::findOrFail($id);
    return view('predica-show', compact('predica'));
}


public function programas()
{
    $programas = Programa::all();
    return view('programas', compact('programas'));
}

    public function contacto()
    {
        return view('contacto');
    }

    public function donaciones()
    {
    $donaciones = \App\Models\Donacion::where('estado', 'completada')
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();
    
    return view('donaciones', compact('donaciones'));
    }
}