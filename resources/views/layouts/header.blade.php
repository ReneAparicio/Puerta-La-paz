<nav class="navbar navbar-expand-md bg-white shadow-sm py-2">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logoblack.png') }}" alt="Puerta de Paz" class="logo-img">
        </a>
        
        <!-- Botón hamburguesa para móvil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menú de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/ministerios') }}">Ministerios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/eventos') }}">Eventos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/predicas') }}">Prédicas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/programas') }}">Programas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
                    @auth('admin')
                    <li class="nav-item"><a class="nav-link" href="{{ url('/admin/programas') }}">Admin</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<style>
    .logo-img {
        height: 70px;
        width: auto;
        max-height: 70px;
    }
    
    /* Ajustes para móvil */
    @media (max-width: 768px) {
        .logo-img {
            height: 50px;
            max-height: 50px;
        }
    }
    
    /* Ajustes para desktop grande */
    @media (min-width: 1200px) {
        .logo-img {
            height: 80px;
            max-height: 80px;
        }
    }
</style>