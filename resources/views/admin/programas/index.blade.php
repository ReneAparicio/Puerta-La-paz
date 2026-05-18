@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Gestión de Programas</h1>
        <a href="{{ url('/admin/programas/create') }}" class="btn btn-success">+ Nuevo Programa</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr><th>ID</th><th>Nombre</th><th>Activo</th><th>Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($programas as $programa)
                <tr>
                    <td>{{ $programa->id }}</td>
                    <td>{{ $programa->nombre }}</td>
                    <td>{{ $programa->activo ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ url('/admin/programas/'.$programa->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ url('/admin/programas/'.$programa->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection