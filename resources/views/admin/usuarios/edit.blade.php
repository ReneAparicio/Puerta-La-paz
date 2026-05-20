@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Editar Administrador: {{ $usuario->nombre }}</h1>

    <form action="{{ url('/admin/usuarios/'.$usuario->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $usuario->nombre }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
        </div>

        <div class="mb-3">
            <label>Contraseña (dejar en blanco para no cambiar)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label>Rol</label>
            <select name="rol" class="form-control" required>
                <option value="admin" {{ $usuario->rol == 'admin' ? 'selected' : '' }}>Admin (Acceso total)</option>
                <option value="editor" {{ $usuario->rol == 'editor' ? 'selected' : '' }}>Editor (Gestiona contenido)</option>
                <option value="supervisor" {{ $usuario->rol == 'supervisor' ? 'selected' : '' }}>Supervisor (Solo lectura)</option>
            </select>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="activo" class="form-check-input" value="1" {{ $usuario->activo ? 'checked' : '' }}>
            <label class="form-check-label">Activo</label>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ url('/admin/usuarios') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection