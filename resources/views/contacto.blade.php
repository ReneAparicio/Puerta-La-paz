@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Columna izquierda: Información de la iglesia -->
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h3 class="mb-4">Iglesia Puerta de Paz</h3>
                    
                    <div class="mb-4">
                        <h5><i class="fas fa-map-marker-alt"></i> Dirección</h5>
                        <p>123 Calle Principal,<br>Soyapango, El Salvador</p>
                    </div>

                    <div class="mb-4">
                        <h5><i class="fas fa-clock"></i> Horarios</h5>
                        <ul class="list-unstyled">
                            <li>Lunes a viernes: 6:00 PM</li>
                            <li>Martes culto matutino: 8:00 AM</li>
                            <li>Jueves ayuno de mujeres: 9:00 AM</li>
                            <li>Domingos: 7:00 AM, 5:30 PM</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h5><i class="fas fa-envelope"></i> Contacto</h5>
                        <p>
                            info@puertadepaz.com<br>
                            multimedia@puertadepaz.com<br>
                            <strong>Teléfono:</strong> +503 7389 4523
                        </p>
                    </div>

                    <div class="mb-4">
                        <h5><i class="fas fa-map-pin"></i> Correspondencia</h5>
                        <p>Iglesia Puerta de Paz, Soyapango, El Salvador</p>
                        <a href="https://maps.google.com/?q=Soyapango+El+Salvador" target="_blank" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-map"></i> Abrir en Maps
                        </a>
                    </div>

                    <div class="mt-4 p-3 bg-light rounded">
                        <p class="mb-2">📱 Si necesitas información más específica o tienes alguna consulta, puedes escribirnos directamente a nuestro WhatsApp. Con gusto te atenderemos y te brindaremos toda la información que necesites.</p>
                        <a href="https://wa.me/50373894523?text=Hola,%20quiero%20más%20información" target="_blank" class="btn btn-success">
                            <i class="fab fa-whatsapp"></i> Da click para escribirnos
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna derecha: Formulario de contacto -->
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h3 class="mb-4">Envíanos un mensaje</h3>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ url('/contacto/enviar') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Nombre completo</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Correo electrónico</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Teléfono (opcional)</label>
                            <input type="tel" name="telefono" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Asunto</label>
                            <input type="text" name="asunto" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Mensaje</label>
                            <textarea name="mensaje" class="form-control" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-paper-plane"></i> Enviar mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-success {
        background-color: #25D366;
        border-color: #25D366;
    }
    .btn-success:hover {
        background-color: #128C7E;
        border-color: #128C7E;
    }
</style>
@endsection