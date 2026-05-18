@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Nuestros Programas</h1>
    
    <!-- Lista de programas -->
    <div class="row">
        @foreach($programas as $programa)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('storage/' . $programa->foto_principal) }}" class="card-img-top" alt="{{ $programa->nombre }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $programa->nombre }}</h5>
                    <p class="card-text">{{ $programa->descripcion_corta }}</p>
                    
                    <!-- Botón para ver galería -->
                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#galeriaModal{{ $programa->id }}">
                        Ver galería
                    </button>
                    
                    <!-- Botón para donar -->
                    <a href="{{ url('/donar-programa/' . $programa->id) }}" class="btn btn-donar btn-sm">Donar a este programa</a>
                </div>
            </div>
        </div>
        
        <!-- Modal de galería -->
        <div class="modal fade" id="galeriaModal{{ $programa->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Galería: {{ $programa->nombre }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carousel{{ $programa->id }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($programa->galeria as $key => $imagen)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $imagen->imagen) }}" class="d-block w-100" alt="Imagen {{ $key+1 }}" style="max-height: 500px; object-fit: contain;">
                                </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $programa->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $programa->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- Donaciones generales -->
    <div class="donaciones-generales mt-5 p-4 bg-light rounded shadow-sm">
        <h2 class="text-center mb-4">Donaciones generales</h2>
        <div class="row">
            <div class="col-md-6">
                <h5>Cuentas bancarias</h5>
                <ul class="list-unstyled">
                    <li><strong>Banco Agrícola:</strong> Cuenta: 01-30-000565-0</li>
                    <li><strong>Banco Davivienda:</strong> Cuenta: 123-456-789</li>
                    <li><strong>Banco Cuscatlán:</strong> Cuenta: 987-654-321</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>PayPal</h5>
                <p>Doná con tu tarjeta de crédito o cuenta de PayPal</p>
                <a href="https://paypal.me/tuusuario" class="btn btn-donar">Donar vía PayPal</a>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-donar {
        background-color: #B16729;
        color: white;
        border: none;
    }
    .btn-donar:hover {
        background-color: #8f4f1f;
        color: white;
    }
</style>
@endsection