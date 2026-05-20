@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Gestión de Eventos</h1>
        <a href="{{ url('/admin/eventos/create') }}" class="btn btn-success">+ Nuevo Evento</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr><th>ID</th><th>Título</th><th>Fecha</th><th>Lugar</th><th>Cupo</th><th>Activo</th><th>Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($eventos as $evento)
                <tr>
                    <td>{{ $evento->id }}</td>
                    <td>{{ $evento->titulo }}</td>
                    <td>{{ $evento->fecha }}</td>
                    <td>{{ $evento->lugar }}</td>
                    <td>{{ $evento->cupo }}</td>
                    <td>{{ $evento->activo ? '✅ Sí' : '❌ No' }}</td>
                    <td>
                        <a href="{{ url('/admin/eventos/'.$evento->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ url('/admin/eventos/'.$evento->id) }}" method="POST" class="d-inline">
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