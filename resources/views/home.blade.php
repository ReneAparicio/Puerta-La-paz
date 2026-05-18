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
                    <a href="/donaciones" class="btn btn-donar me-3">Donar ahora</a>
                    <a href="/sobre-nosotros" class="btn btn-conocer">Conoce más</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Estilos de la sección hero -->
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
    }

    .btn-conocer:hover {
        background-color: white;
        color: #B16729;
        transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }

        .btn-donar,
        .btn-conocer {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
    }
</style>
@endsection