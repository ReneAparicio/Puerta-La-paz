@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Mensajes de Contacto</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Asunto</th><th>Estado</th><th>Fecha</th><th>Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($mensajes as $mensaje)
                <tr>
                    <td>{{ $mensaje->id }}</td>
                    <td>{{ $mensaje->nombre }}</td>
                    <td>{{ $mensaje->email }}</td>
                    <td>{{ $mensaje->asunto }}</td>
                    <td>{!! $mensaje->leido ? '<span class="badge bg-success">Leído</span>' : '<span class="badge bg-warning">No leído</span>' !!}</td>
                    <td>{{ $mensaje->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ url('/admin/mensajes/'.$mensaje->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <form action="{{ url('/admin/mensajes/'.$mensaje->id) }}" method="POST" class="d-inline">
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