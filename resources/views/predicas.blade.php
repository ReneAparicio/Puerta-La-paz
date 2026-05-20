@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Prédicas</h1>

    <div class="row">
        @foreach($predicas as $predica)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                @if($predica->imagen)
                    <img src="{{ asset('storage/' . $predica->imagen) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $predica->titulo }}</h5>
                    <p class="card-text text-muted">Por: {{ $predica->predicador }} | {{ $predica->fecha }}</p>
                    <p class="card-text">{{ Str::limit($predica->descripcion, 100) }}</p>
                    <a href="{{ url('/predicas/'.$predica->id) }}" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection