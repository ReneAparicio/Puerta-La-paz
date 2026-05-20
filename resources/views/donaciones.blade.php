@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Apoya Nuestra Misión</h1>
    <p class="text-center mb-5">Tu generosidad ayuda a seguir llevando paz a más personas.</p>

    <div class="row">
        <!-- Formulario de donación -->
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Formulario de Donación</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/procesar-donacion') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nombre completo *</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Correo electrónico *</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Teléfono</label>
                            <input type="tel" name="telefono" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Monto a donar (USD) *</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" name="monto" class="form-control" step="0.01" min="1" required>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input type="checkbox" id="requiere_comprobante" name="requiere_comprobante" class="form-check-input" value="1">
                            <label class="form-check-label">Requiero comprobante fiscal</label>
                        </div>

                        <div id="datosFiscales" style="display: none;">
                            <div class="mb-3">
                                <label>NIT/DUI</label>
                                <input type="text" name="documento_identidad" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Dirección fiscal</label>
                                <textarea name="direccion" class="form-control" rows="2"></textarea>
                            </div>
                        </div>

                        <div id="paypal-button-container" class="text-center mt-3"></div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Columna derecha: Transferencia bancaria + Donaciones recientes -->
        <div class="col-md-5">
            <!-- Transferencia bancaria -->
            <div class="card shadow mb-4">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Transferencia bancaria</h4>
                </div>
                <div class="card-body">
                    <p><strong>Banco Agrícola:</strong><br>Cuenta: 01-30-000565-0<br>A nombre: Puerta de Paz</p>
                    <hr>
                    <p><strong>Banco Davivienda:</strong><br>Cuenta: 123-456-789<br>A nombre: Puerta de Paz</p>
                </div>
            </div>

            <!-- Donaciones recientes -->
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Donaciones recientes</h4>
                </div>
                <div class="card-body">
                    @if($donaciones->count() > 0)
                        @foreach($donaciones as $donacion)
                            <div class="border-bottom pb-2 mb-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>{{ $donacion->nombre }}</strong>
                                        <br>
                                        <small class="text-muted">${{ number_format($donacion->monto, 2) }}</small>
                                    </div>
                                    <span class="badge bg-success">Completada</span>
                                </div>
                                <small class="text-muted">{{ $donacion->created_at->diffForHumans() }}</small>
                            </div>
                        @endforeach
                    @else
                        <p class="text-muted text-center">No hay donaciones recientes aún. ¡Sé el primero!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
<script>
    // Mostrar/ocultar datos fiscales
    document.getElementById('requiere_comprobante').addEventListener('change', function() {
        document.getElementById('datosFiscales').style.display = this.checked ? 'block' : 'none';
    });

    // Renderizar botón de PayPal
    PayPal.Donation.Button({
        env: 'production',
        hosted_button_id: 'TEHFADYBJLFCN',
        image: {
            src: 'https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif',
            alt: 'Donate with PayPal button',
            title: 'PayPal - The safer, easier way to pay online!',
        },
        onComplete: function() {
            alert('Gracias por tu donación. Recibirás un correo de confirmación.');
            window.location.href = '{{ url("/donaciones") }}';
        }
    }).render('#paypal-button-container');
</script>

<style>
    .btn-donar {
        background-color: #B16729;
        color: white;
    }
</style>
@endsection