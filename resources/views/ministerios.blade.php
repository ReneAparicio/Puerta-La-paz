@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1>Nuestros Ministerios</h1>
        <p class="lead">Conoce la estructura y el equipo que hace posible la obra de Dios.</p>
    </div>

    <!-- Pastores -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Pastores</h3>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h4>Pastor Titular</h4>
                                <p class="text-muted">Ps. Juan Carlos Pérez</p>
                                <small>Director general y fundador</small>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h4>Pastor Asistente</h4>
                                <p class="text-muted">Ps. David Gómez</p>
                                <small>Apoyo pastoral y consejería</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Líderes Ministeriales -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-success text-white text-center">
                    <h3 class="mb-0">Líderes Ministeriales</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>🎵 Alabanzas</h5>
                                <small>Hna. Miriam López</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>🛠️ Servidores</h5>
                                <small>Hno. Roberto Méndez</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>🐟 ICTHUS</h5>
                                <small>Hna. Karla Flores</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>📹 Multimedia</h5>
                                <small>Hno. Luis Rivera</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>✈️ Pilotos</h5>
                                <small>Hno. Carlos Díaz</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>🏗️ Nehemías</h5>
                                <small>Hno. José Martínez</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>⚔️ Caballeros</h5>
                                <small>Hno. Andrés Castro</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>🌸 Damas</h5>
                                <small>Hna. Patricia Torres</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>🌍 Misiones</h5>
                                <small>Hna. Ruth Ramírez</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>📊 Estadísticas</h5>
                                <small>Hno. Eduardo Salinas</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="border rounded p-2 text-center">
                                <h5>📖 ABAES</h5>
                                <small>Hno. Moisés Rivas</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Programas -->
    <div class="row mb-5">
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-warning text-dark text-center">
                    <h3 class="mb-0">Programas</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">🍽️ <strong>C.I.S (Comedor Infantil Sabatino)</strong> - Alimentación y atención integral para niños.</li>
                        <li class="list-group-item">🤝 <strong>Conexión Juvenil</strong> - Espacio para jóvenes de 10 a 18 años.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-info text-white text-center">
                    <h3 class="mb-0">Programas de Convenio</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">💧 <strong>Casa x Casa</strong> - Programa de renovación espiritual.</li>
                        <li class="list-group-item">⚽ <strong>Alcaldia soyapango Futboll</strong> - Deportes y evangelismo.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Junta Directiva Local -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-danger text-white text-center">
                    <h3 class="mb-0">Junta Directiva Local (J.D.L.)</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-2"><strong>Presidente:</strong> Hno. Manuel Hernández</div>
                        <div class="col-md-3 col-sm-6 mb-2"><strong>Vicepresidente:</strong> Hna. Laura Gutiérrez</div>
                        <div class="col-md-3 col-sm-6 mb-2"><strong>Tesorera:</strong> Hna. Ana Flores</div>
                        <div class="col-md-3 col-sm-6 mb-2"><strong>Protesorero:</strong> Hno. Ricardo Pineda</div>
                        <div class="col-md-3 col-sm-6 mb-2"><strong>Secretaria:</strong> Hna. Marlene Castro</div>
                        <div class="col-md-3 col-sm-6 mb-2"><strong>Prosecretario:</strong> Hno. Oscar Molina</div>
                        <div class="col-md-3 col-sm-6 mb-2"><strong>Vocal 1:</strong> Hna. Silvia Torres</div>
                        <div class="col-md-3 col-sm-6 mb-2"><strong>Vocal 2:</strong> Hno. Eduardo Campos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-header h3 {
        font-size: 1.5rem;
    }
    .list-group-item {
        background-color: transparent;
    }
</style>
@endsection