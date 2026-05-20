@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Crear Evento</h1>

    <form action="{{ url('/admin/eventos') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3" required></textarea>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label>Fecha</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label>Hora</label>
                <input type="time" name="hora" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label>Lugar</label>
                <input type="text" name="lugar" class="form-control" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <label>Cupo</label>
                <input type="number" name="cupo" class="form-control" required>
            </div>
        </div>

        <div class="mb-3 mt-3">
            <label>Imagen (opcional)</label>
            <input type="file" name="imagen" class="form-control" accept="image/*">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="activo" class="form-check-input" value="1" checked>
            <label>Activo</label>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ url('/admin/eventos') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection