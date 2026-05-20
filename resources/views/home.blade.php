@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="hero-title">Un lugar para<br>encontrar paz</h1>
                <p class="hero-subtitle">Te esperamos en Soyapango, El Salvador</p>
                <div class="hero-buttons mt-4">
                    <a class="btn btn-donar me-3" href="{{ url('/donaciones') }}">Donar ahora</a>
                    <a href="{{ url('/ministerios') }}" class="btn btn-conocer">Conoce más</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SECCIÓN MINISTERIOS ==================== -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Nuestros Ministerios</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card ministerio-card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <div class="ministerio-icon fs-1">👥</div>
                        <h5 class="card-title mt-2">Juventud</h5>
                        <p class="card-text small">Espacio para jóvenes que buscan crecer espiritualmente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card ministerio-card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <div class="ministerio-icon fs-1">🧒</div>
                        <h5 class="card-title mt-2">Niños</h5>
                        <p class="card-text small">Enseñanza bíblica y actividades para los más pequeños.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card ministerio-card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <div class="ministerio-icon fs-1">🎵</div>
                        <h5 class="card-title mt-2">Alabanza</h5>
                        <p class="card-text small">Ministerio de música y adoración.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card ministerio-card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <div class="ministerio-icon fs-1">💍</div>
                        <h5 class="card-title mt-2">Matrimonios</h5>
                        <p class="card-text small">Fortaleciendo la familia y el hogar.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="{{ url('/ministerios') }}" class="btn btn-outline-primary">Ver todos los ministerios</a>
        </div>
    </div>
</section>

<!-- ==================== SECCIÓN PRÓXIMOS EVENTOS ==================== -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Próximos Eventos</h2>
        <div class="row">
            @forelse($eventos as $evento)
                <div class="col-md-4 mb-4">
                    <div class="card evento-card h-100 shadow-sm">
                        @if($evento->imagen)
                            <img src="{{ asset('storage/' . $evento->imagen) }}" class="card-img-top" alt="{{ $evento->titulo }}" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="bg-secondary text-white text-center py-4">📅 Evento</div>
                        @endif
                        <div class="card-body">
                            <div class="evento-fecha mb-2">
                                <span class="badge bg-primary">{{ \Carbon\Carbon::parse($evento->fecha)->format('d M, Y') }}</span>
                            </div>
                            <h5 class="card-title">{{ $evento->titulo }}</h5>
                            <p class="card-text small">{{ Str::limit($evento->descripcion, 80) }}</p>
                            <p class="text-muted small mb-2">
                                <i class="fas fa-clock"></i> {{ $evento->hora }}<br>
                                <i class="fas fa-location-dot"></i> {{ $evento->lugar }}
                            </p>
                            <a href="{{ url('/eventos') }}" class="btn btn-outline-primary btn-sm">Ver más</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No hay eventos próximos por el momento.</p>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="{{ url('/eventos') }}" class="btn btn-primary">Ver todos los eventos</a>
        </div>
    </div>
</section>

<!-- ==================== SECCIÓN PRÉDICAS RECIENTES ==================== -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Prédicas Recientes</h2>
        <div class="row">
            @forelse($predicas as $predica)
                <div class="col-md-4 mb-4">
                    <div class="card predica-card h-100 shadow-sm">
                        @if($predica->imagen)
                            <img src="{{ asset('storage/' . $predica->imagen) }}" class="card-img-top" alt="{{ $predica->titulo }}" style="height: 180px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $predica->titulo }}</h5>
                            <p class="text-muted small">Por: {{ $predica->predicador }} | {{ \Carbon\Carbon::parse($predica->fecha)->format('d/m/Y') }}</p>
                            <p class="card-text small">{{ Str::limit($predica->descripcion, 100) }}</p>
                            <a href="{{ url('/predicas/'.$predica->id) }}" class="btn btn-outline-primary btn-sm">Ver prédica</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No hay prédicas disponibles por el momento.</p>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-3">
            <a href="{{ url('/predicas') }}" class="btn btn-primary">Ver todas las prédicas</a>
        </div>
    </div>
</section>

<!-- ==================== SECCIÓN DONACIONES ==================== -->
<section class="py-5 text-white text-center" style="background: linear-gradient(135deg, #B16729, #8f4f1f);">
    <div class="container">
        <h2 class="mb-3">Apoya nuestra misión</h2>
        <p class="mb-4">Tu generosidad ayuda a seguir llevando paz a más personas.</p>
        <a href="{{ url('/donaciones') }}" class="btn btn-light btn-lg rounded-pill px-4" style="color: #B16729; font-weight: 600;">Donar vía PayPal</a>
        <p class="mt-3 small">🔒 Transacción segura</p>
    </div>
</section>

<!-- Estilos -->
<style>
    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                    url('{{ asset("images/homebanner.jpg") }}') center center/cover no-repeat;
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .hero-subtitle {
        font-size: 1.2rem;
        margin-bottom: 1.5rem;
        opacity: 0.9;
    }

    .btn-donar {
        background-color: #B16729;
        color: white;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        text-decoration: none;
        display: inline-block;
    }

    .btn-donar:hover {
        background-color: #8f4f1f;
        color: white;
        transform: translateY(-2px);
    }

    .btn-conocer {
        background-color: transparent;
        color: white;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        border: 2px solid white;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-conocer:hover {
        background-color: white;
        color: #B16729;
        transform: translateY(-2px);
    }

    .ministerio-card, .evento-card, .predica-card {
        transition: transform 0.3s ease;
        border: none;
        border-radius: 12px;
    }

    .ministerio-card:hover, .evento-card:hover, .predica-card:hover {
        transform: translateY(-5px);
    }

    .ministerio-icon {
        font-size: 2.5rem;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.2rem;
        }
        .hero-subtitle {
            font-size: 1rem;
        }
        .btn-donar, .btn-conocer {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
    }
</style>
@endsection