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
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h3>➕</h3>
                        <h5>Programas</h5>
                        <a href="{{ url('/admin/programas') }}" class="btn btn-primary btn-sm">Gestionar Programas</a>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h3>📅</h3>
                        <h5>Eventos</h5>
                        <a href="{{ url('/admin/eventos') }}" class="btn btn-primary btn-sm">Gestionar Eventos</a>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h3>💰</h3>
                        <h5>Donaciones</h5>
                        <a href="{{ url('/admin/donaciones') }}" class="btn btn-primary btn-sm">Gestionar Donaciones</a>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h3>🎙️</h3>
                        <h5>Prédicas</h5>
                        <a href="{{ url('/admin/predicas') }}" class="btn btn-primary btn-sm">Gestionar Prédicas</a>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h3>👥</h3>
                        <h5>Usuarios Admin</h5>
                        <a href="{{ url('/admin/usuarios') }}" class="btn btn-warning btn-sm">Gestionar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
    <div class="card p-3 text-center">
        <h3>✉️</h3>
        <h5>Mensajes</h5>
        <a href="{{ url('/admin/mensajes') }}" class="btn btn-primary btn-sm">Ver Mensajes</a>
    </div>
</div>
        @elseif($user->rol == 'editor')
            <div class="alert alert-info">Tienes acceso de EDITOR.</div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h3>➕</h3>
                        <h5>Programas</h5>
                        <a href="{{ url('/admin/programas') }}" class="btn btn-primary btn-sm">Ver Programas</a>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h3>💰</h3>
                        <h5>Donaciones</h5>
                        <button class="btn btn-secondary btn-sm" disabled>Próximamente</button>
                    </div>
                </div>
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
main
            </div>
        @else
            <div class="alert alert-warning">Tienes acceso de SUPERVISOR (solo lectura).</div>
            <div class="row">
Rene-AR240329
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h3>👁️</h3>
                        <h5>Programas</h5>
                        <a href="{{ url('/programas') }}" class="btn btn-info btn-sm">Ver sitio</a>
                    </div>
                </div>

                <div class="col-md-4"><div class="card p-3">👁️ Ver eventos</div></div>
                <div class="col-md-4"><div class="card p-3">👁️ Ver donaciones</div></div>
 main
            </div>
        @endif
    </div>
</body>
</html>