@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Crear Administrador</h1>

    <form action="{{ url('/admin/usuarios') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Rol</label>
            <select name="rol" class="form-control" required>
                <option value="admin">Admin (Acceso total)</option>
                <option value="editor">Editor (Gestiona contenido)</option>
                <option value="supervisor">Supervisor (Solo lectura)</option>
            </select>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="activo" class="form-check-input" value="1" checked>
            <label class="form-check-label">Activo</label>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ url('/admin/usuarios') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection