@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Gestión de Donaciones</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Donante</th>
                    <th>Email</th>
                    <th>Monto</th>
                    <th>Estado</th>
                    <th>Requiere comprobante</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($donaciones as $donacion)
                <tr>
                    <td>{{ $donacion->id }}</td>
                    <td>{{ $donacion->nombre }}</td>
                    <td>{{ $donacion->email }}</td>
                    <td>${{ number_format($donacion->monto, 2) }}</td>
                    <td>
                        <form action="{{ url('/admin/donaciones/'.$donacion->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                            <select name="estado" class="form-select form-select-sm" onchange="this.form.submit()">
                            <option value="pendiente" {{ $donacion->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                            <option value="completada" {{ $donacion->estado == 'completada' ? 'selected' : '' }}>Completada</option>
                            <option value="fallida" {{ $donacion->estado == 'fallida' ? 'selected' : '' }}>Fallida</option>
                        </select>
                        </form>
                    </td>
                    <td>{{ $donacion->requiere_comprobante ? '✅ Sí' : '❌ No' }}</td>
                    <td>{{ $donacion->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ url('/admin/donaciones/'.$donacion->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <form action="{{ url('/admin/donaciones/'.$donacion->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection