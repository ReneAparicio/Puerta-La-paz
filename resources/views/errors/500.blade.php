@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <h1 class="display-1 fw-bold text-muted">500</h1>
    <h2 class="mb-4">Error interno del servidor</h2>
    <p class="lead mb-4">Algo salió mal. Por favor, intenta más tarde.</p>
    <a href="{{ url('/') }}" class="btn btn-donar">Volver al inicio</a>
</div>

<style>
    .btn-donar {
        background-color: #B16729;
        color: white;
        padding: 12px 30px;
        border-radius: 50px;
        text-decoration: none;
    }
    .btn-donar:hover {
        background-color: #8f4f1f;
    }
</style>
@endsection