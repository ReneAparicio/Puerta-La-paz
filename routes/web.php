<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\Admin\ProgramaController;

Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::resource('programas', ProgramaController::class);
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/ministerios', [PaginasController::class, 'ministerios']);
Route::get('/eventos', [PaginasController::class, 'eventos']);
Route::get('/predicas', [PaginasController::class, 'predicas']);
Route::get('/programas', [PaginasController::class, 'programas']);
Route::get('/contacto', [PaginasController::class, 'contacto']);

use App\Http\Controllers\AdminAuthController;

// Panel administrativo
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');