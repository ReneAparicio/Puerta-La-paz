<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Puerta de Paz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand">Panel Administrativo</span>
            <div>
                <span class="badge bg-secondary me-2">Rol: {{ $user->rol }}</span>
                <a href="{{ route('admin.logout') }}" class="btn btn-danger btn-sm">Cerrar sesión</a>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <h2>Bienvenido, {{ $user->nombre }}</h2>

        @if($user->rol == 'admin')
            <div class="alert alert-success">Tienes acceso TOTAL.</div>
            <div class="row">
                <div class="col-md-4"><div class="card p-3">➕ Crear evento</div></div>
                <div class="col-md-4"><div class="card p-3">✏️ Editar eventos</div></div>
                <div class="col-md-4"><div class="card p-3">🗑️ Eliminar eventos</div></div>
                <div class="col-md-4"><div class="card p-3">👥 Gestionar usuarios</div></div>
                <div class="col-md-4"><div class="card p-3">💰 Ver donaciones</div></div>
                <div class="col-md-4"><div class="card p-3">📄 Emitir comprobantes</div></div>
            </div>
        @elseif($user->rol == 'editor')
            <div class="alert alert-info">Tienes acceso de EDITOR.</div>
            <div class="row">
                <div class="col-md-4"><div class="card p-3">➕ Crear evento</div></div>
                <div class="col-md-4"><div class="card p-3">✏️ Editar eventos</div></div>
                <div class="col-md-4"><div class="card p-3">💰 Ver donaciones</div></div>
            </div>
        @else
            <div class="alert alert-warning">Tienes acceso de SUPERVISOR (solo lectura).</div>
            <div class="row">
                <div class="col-md-4"><div class="card p-3">👁️ Ver eventos</div></div>
                <div class="col-md-4"><div class="card p-3">👁️ Ver donaciones</div></div>
            </div>
        @endif
    </div>
</body>
</html>