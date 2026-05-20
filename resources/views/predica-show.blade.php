@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            @if($predica->imagen)
                <img src="{{ asset('storage/' . $predica->imagen) }}" class="img-fluid rounded mb-4" alt="{{ $predica->titulo }}">
            @endif

            <h1 class="mb-3">{{ $predica->titulo }}</h1>
            <p class="text-muted mb-4">Por: {{ $predica->predicador }} | {{ $predica->fecha }}</p>

            <div class="mb-4">
                <h5>Descripción</h5>
                <p>{{ $predica->descripcion }}</p>
            </div>

            <div class="mb-4">
                <h5>Contenido</h5>
                <p>{{ $predica->contenido }}</p>
            </div>

            @if($predica->video_url)
                <div class="mb-4">
                    <h5>Video</h5>
                    <div class="ratio ratio-16x9">
                        <iframe src="{{ $predica->video_url }}" allowfullscreen></iframe>
                    </div>
                </div>
            @endif

            @if($predica->audio_url)
                <div class="mb-4">
                    <h5>Audio</h5>
                    <audio controls class="w-100">
                        <source src="{{ $predica->audio_url }}" type="audio/mpeg">
                        Tu navegador no soporta audio.
                    </audio>
                </div>
            @endif

            <a href="{{ url('/predicas') }}" class="btn btn-secondary">← Volver a prédicas</a>
        </div>
    </div>
</div>
@endsection