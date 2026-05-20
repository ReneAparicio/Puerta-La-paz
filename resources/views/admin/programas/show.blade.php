@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>{{ $programa->nombre }}</h1>
        <div>
            <a href="{{ url('/admin/programas/'.$programa->id.'/edit') }}" class="btn btn-warning">Editar</a>
            <a href="{{ url('/admin/programas') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            @if($programa->foto_principal)
                <img src="{{ asset('storage/' . $programa->foto_principal) }}" class="img-fluid rounded shadow" alt="{{ $programa->nombre }}">
            @else
                <div class="bg-light p-5 text-center rounded">Sin imagen principal</div>
            @endif
        </div>
        <div class="col-md-6">
            <p><strong>Estado:</strong> {{ $programa->activo ? '✅ Activo' : '❌ Inactivo' }}</p>
            <p><strong>Descripción Corta:</strong></p>
            <p>{{ $programa->descripcion_corta }}</p>
            <p><strong>Descripción Larga:</strong></p>
            <p>{{ $programa->descripcion_larga }}</p>
        </div>
    </div>

    @if($programa->galeria && $programa->galeria->count())
        <h3 class="mt-4">Galería de imágenes</h3>
        <div class="row">
            @foreach($programa->galeria as $img)
                <div class="col-md-3 mb-3">
                    <img src="{{ asset('storage/' . $img->imagen) }}" class="img-fluid rounded shadow" style="height: 150px; object-fit: cover; width: 100%;">
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection