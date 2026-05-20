@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Gestión de Administradores</h1>
        <a href="{{ url('/admin/usuarios/create') }}" class="btn btn-success">+ Nuevo Administrador</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Rol</th><th>Activo</th><th>Acciones</th></tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ ucfirst($usuario->rol) }}</td>
                    <td>{{ $usuario->activo ? '✅ Sí' : '❌ No' }}</td>
                    <td>
                        <a href="{{ url('/admin/usuarios/'.$usuario->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ url('/admin/usuarios/'.$usuario->id) }}" method="POST" class="d-inline">
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