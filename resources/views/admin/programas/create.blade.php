@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Crear Programa</h1>

    <form action="{{ url('/admin/programas') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Descripción Corta</label>
            <textarea name="descripcion_corta" class="form-control" rows="2" required></textarea>
        </div>
        <div class="mb-3">
            <label>Descripción Larga</label>
            <textarea name="descripcion_larga" class="form-control" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label>Foto Principal</label>
            <input type="file" name="foto_principal" class="form-control" accept="image/*">
        </div>
        <div class="mb-3">
            <label>Galería de imágenes (hasta 5)</label>
            <input type="file" name="galeria[]" class="form-control" multiple accept="image/*">
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" name="activo" class="form-check-input" value="1" checked>
            <label class="form-check-label">Activo</label>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ url('/admin/programas') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection