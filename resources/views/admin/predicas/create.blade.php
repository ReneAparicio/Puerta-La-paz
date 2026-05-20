@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Nueva Prédica</h1>

    <form action="{{ url('/admin/predicas') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Predicador</label>
            <input type="text" name="predicador" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label>Contenido (texto completo)</label>
            <textarea name="contenido" class="form-control" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label>URL de Video (YouTube, Vimeo, etc.)</label>
            <input type="url" name="video_url" class="form-control" placeholder="https://...">
        </div>

        <div class="mb-3">
            <label>URL de Audio</label>
            <input type="url" name="audio_url" class="form-control" placeholder="https://...">
        </div>

        <div class="mb-3">
            <label>Imagen destacada</label>
            <input type="file" name="imagen" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label>Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="activo" class="form-check-input" value="1" checked>
            <label>Activo (visible en el sitio)</label>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ url('/admin/predicas') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection