@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Editar Prédica: {{ $predica->titulo }}</h1>

    <form action="{{ url('/admin/predicas/'.$predica->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ $predica->titulo }}" required>
        </div>

        <div class="mb-3">
            <label>Predicador</label>
            <input type="text" name="predicador" class="form-control" value="{{ $predica->predicador }}" required>
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3" required>{{ $predica->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label>Contenido</label>
            <textarea name="contenido" class="form-control" rows="5">{{ $predica->contenido }}</textarea>
        </div>

        <div class="mb-3">
            <label>URL de Video</label>
            <input type="url" name="video_url" class="form-control" value="{{ $predica->video_url }}">
        </div>

        <div class="mb-3">
            <label>URL de Audio</label>
            <input type="url" name="audio_url" class="form-control" value="{{ $predica->audio_url }}">
        </div>

        <div class="mb-3">
            <label>Imagen destacada</label>
            <input type="file" name="imagen" class="form-control" accept="image/*">
            @if($predica->imagen)
                <div class="mt-2"><img src="{{ asset('storage/' . $predica->imagen) }}" height="60"></div>
            @endif
        </div>

        <div class="mb-3">
            <label>Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $predica->fecha }}" required>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="activo" class="form-check-input" value="1" {{ $predica->activo ? 'checked' : '' }}>
            <label>Activo</label>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ url('/admin/predicas') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection