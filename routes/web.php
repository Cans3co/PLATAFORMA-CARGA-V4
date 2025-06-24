<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// =============================================
// 1. RUTAS PARA INVITADOS (NO AUTENTICADOS)
// =============================================
Route::middleware('guest')->group(function () {
    // Redirige "/" al login
    Route::get('/', function () {
        return redirect()->route('login');
    });

    // Registro (público)
    Route::controller(RegisteredUserController::class)->group(function () {
        Route::get('register', 'create')->name('register');
        Route::post('register', 'store')->name('register.store');
    });
});

// =============================================
// 2. AUTENTICACIÓN BREEZE (SESIONES/VERIFICACIÓN)
// =============================================
require __DIR__.'/auth.php';

// =============================================
// 3. RUTAS AUTENTICADAS (REQUIEREN LOGIN)
// =============================================
Route::middleware(['auth', 'verified'])->group(function () {
    // --- Página de inicio ---
    // Opción 1: Accesible desde "/inicio" y "/" (ambas funcionan igual)
    Route::get('/inicio', function () {
        return view('inicio');
    })->name('inicio');
    
    // Redirige "/" y "/dashboard" a la página de inicio
    Route::redirect('/', '/inicio'); // Más eficiente que usar closure
    Route::redirect('/dashboard', '/inicio');

    // --- Perfil de usuario ---
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    // --- Área de administración (Solo para admins) ---
    Route::middleware('admin')->group(function () {
        Route::controller(RegisteredUserController::class)->group(function () {
            Route::get('/admin/register', 'create')->name('admin.register.create');
            Route::post('/admin/register', 'store')->name('admin.register.store');
        });
    });
});