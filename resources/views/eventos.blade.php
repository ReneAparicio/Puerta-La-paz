@extends('layouts.app')

@php
use Illuminate\Support\Str;
@endphp

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Próximos Eventos</h1>

    <div class="row">
        @forelse($eventos as $evento)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                @if($evento->imagen)
                    <img src="{{ asset('storage/' . $evento->imagen) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $evento->titulo }}</h5>
                    <p class="card-text">{{ Str::limit($evento->descripcion, 100) }}</p>
                    <p><strong>📅 Fecha:</strong> {{ $evento->fecha }}<br>
                       <strong>⏰ Hora:</strong> {{ $evento->hora }}<br>
                       <strong>📍 Lugar:</strong> {{ $evento->lugar }}<br>
                       <strong>👥 Cupo:</strong> {{ $evento->cupo }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info text-center">No hay eventos disponibles por el momento.</div>
        </div>
        @endforelse
    </div>
</div>
@endsection