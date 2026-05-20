<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Predica;

class HomeController extends Controller
{
    public function index()
    {
        $eventos = Evento::where('activo', true)
                    ->where('fecha', '>=', now())
                    ->orderBy('fecha', 'asc')
                    ->limit(3)
                    ->get();

        $predicas = Predica::where('activo', true)
                    ->orderBy('fecha', 'desc')
                    ->limit(3)
                    ->get();

        return view('home', compact('eventos', 'predicas'));
    }
}