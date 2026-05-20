@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Editar Programa: {{ $programa->nombre }}</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ url('/admin/programas/'.$programa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $programa->nombre) }}" required>
        </div>

        <div class="mb-3">
            <label>Descripción Corta</label>
            <textarea name="descripcion_corta" class="form-control" rows="2" required>{{ old('descripcion_corta', $programa->descripcion_corta) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Descripción Larga</label>
            <textarea name="descripcion_larga" class="form-control" rows="5" required>{{ old('descripcion_larga', $programa->descripcion_larga) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Foto Principal</label>
            <input type="file" name="foto_principal" class="form-control" accept="image/*">
            @if($programa->foto_principal)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $programa->foto_principal) }}" height="60">
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label>Galería de imágenes (subir nuevas reemplazará las actuales)</label>
            <input type="file" name="galeria[]" class="form-control" multiple accept="image/*">
            @if($programa->galeria && $programa->galeria->count())
                <div class="mt-2">
                    @foreach($programa->galeria as $img)
                        <img src="{{ asset('storage/' . $img->imagen) }}" height="50" class="me-1">
                    @endforeach
                </div>
            @endif
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="activo" class="form-check-input" value="1" {{ $programa->activo ? 'checked' : '' }}>
            <label class="form-check-label">Activo</label>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ url('/admin/programas') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection