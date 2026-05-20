@extends('layouts.app')

@section('content')
<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h1>Detalle de Donación #{{ $donacion->id }}</h1>

    <div class="card mt-3">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $donacion->nombre }}</p>
            <p><strong>Email:</strong> {{ $donacion->email }}</p>
            <p><strong>Teléfono:</strong> {{ $donacion->telefono ?? 'N/A' }}</p>
            <p><strong>Monto:</strong> ${{ number_format($donacion->monto, 2) }}</p>
            <p><strong>Estado:</strong> 
                <span class="badge bg-{{ $donacion->estado == 'completada' ? 'success' : ($donacion->estado == 'pendiente' ? 'warning' : 'danger') }}">
                    {{ ucfirst($donacion->estado) }}
                </span>
            </p>
            <p><strong>Requiere comprobante:</strong> {{ $donacion->requiere_comprobante ? 'Sí' : 'No' }}</p>
            @if($donacion->documento_identidad)
                <p><strong>Documento:</strong> {{ $donacion->documento_identidad }}</p>
            @endif
            @if($donacion->direccion)
                <p><strong>Dirección:</strong> {{ $donacion->direccion }}</p>
            @endif
            <p><strong>Transacción PayPal:</strong> {{ $donacion->transaccion_id ?? 'N/A' }}</p>
            <p><strong>Fecha:</strong> {{ $donacion->created_at->format('d/m/Y H:i:s') }}</p>
        </div>
    </div>

    @if(!$donacion->comprobante_emitido && $donacion->estado == 'completada' && $donacion->requiere_comprobante)
        <form action="{{ url('/admin/donaciones/'.$donacion->id.'/emitir-comprobante') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success mt-3">Emitir comprobante fiscal</button>
        </form>
    @elseif($donacion->comprobante_emitido)
        <div class="alert alert-info mt-3">
            ✅ Comprobante emitido. Número: <strong>{{ $donacion->numero_comprobante }}</strong>
        </div>
    @elseif($donacion->estado == 'completada' && !$donacion->requiere_comprobante)
        <div class="alert alert-secondary mt-3">
            ℹ️ Esta donación no requiere comprobante fiscal.
        </div>
    @endif

    <a href="{{ url('/admin/donaciones') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection