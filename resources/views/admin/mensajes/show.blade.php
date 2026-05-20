@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Mensaje de {{ $mensaje->nombre }}</h1>

    <div class="card mt-3">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $mensaje->nombre }}</p>
            <p><strong>Email:</strong> {{ $mensaje->email }}</p>
            <p><strong>Teléfono:</strong> {{ $mensaje->telefono ?? 'N/A' }}</p>
            <p><strong>Asunto:</strong> {{ $mensaje->asunto }}</p>
            <p><strong>Mensaje:</strong></p>
            <div class="border p-3 bg-light">
                {{ $mensaje->mensaje }}
            </div>
            <p class="mt-3"><strong>Fecha:</strong> {{ $mensaje->created_at->format('d/m/Y H:i:s') }}</p>
        </div>
    </div>

    <a href="{{ url('/admin/mensajes') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection