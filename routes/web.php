<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\Admin\ProgramaController;
use App\Http\Controllers\Admin\EventoController;
use App\Http\Controllers\Admin\DonacionController;
use App\Http\Controllers\Admin\UsuarioAdminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DonacionController as PublicDonacionController;
use App\Http\Controllers\Admin\PredicaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Admin\MensajeContactoController;

Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::resource('programas', ProgramaController::class);
    Route::resource('eventos', EventoController::class);
    Route::resource('donaciones', DonacionController::class);
    Route::resource('usuarios', UsuarioAdminController::class);
    Route::resource('predicas', PredicaController::class);
    Route::resource('mensajes', MensajeContactoController::class);

    // Ruta para cambiar estado de donación
    Route::patch('/donaciones/{id}/estado', [DonacionController::class, 'updateEstado'])->name('donaciones.estado');
    
    // Ruta para emitir comprobante fiscal (dentro del grupo admin)
    Route::post('/donaciones/{id}/emitir-comprobante', [DonacionController::class, 'emitirComprobante'])->name('donaciones.emitir');
});

// Ruta para guardar donación antes de PayPal
Route::post('/procesar-donacion', [PublicDonacionController::class, 'procesar'])->name('procesar.donacion');

// Rutas públicas
Route::get('/', [HomeController::class, 'index']);
Route::get('/ministerios', [PaginasController::class, 'ministerios']);
Route::get('/eventos', [PaginasController::class, 'eventos']);
Route::get('/predicas', [PaginasController::class, 'predicas']);
Route::get('/programas', [PaginasController::class, 'programas']);
Route::get('/contacto', [PaginasController::class, 'contacto']);
Route::get('/donaciones', [PaginasController::class, 'donaciones']);
Route::get('/predicas/{id}', [PaginasController::class, 'predicaShow']);

Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');

// Panel administrativo
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');