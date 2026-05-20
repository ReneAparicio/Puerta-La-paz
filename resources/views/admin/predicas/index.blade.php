@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Gestión de Prédicas</h1>
        <a href="{{ url('/admin/predicas/create') }}" class="btn btn-success">+ Nueva Prédica</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr><th>ID</th><th>Título</th><th>Predicador</th><th>Fecha</th><th>Activo</th><th>Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($predicas as $predica)
                <tr>
                    <td>{{ $predica->id }}</td>
                    <td>{{ $predica->titulo }}</td>
                    <td>{{ $predica->predicador }}</td>
                    <td>{{ $predica->fecha }}</td>
                    <td>{{ $predica->activo ? '✅ Sí' : '❌ No' }}</td>
                    <td>
                        <a href="{{ url('/admin/predicas/'.$predica->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ url('/admin/predicas/'.$predica->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection