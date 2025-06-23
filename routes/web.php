<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// Redirige la ruta principal "/" al login (solo para invitados)
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });
});

// Autenticación Breeze
require __DIR__.'/auth.php';

// Área autenticada
Route::middleware(['auth', 'verified'])->group(function () {
    // Página principal después del login (redirige al dashboard)
    Route::redirect('/inicio', '/dashboard')->name('inicio');
    
    // Dashboard como página principal autenticada
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Perfil de usuario
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    // Administración (Solo para admins)
    Route::middleware('admin')->group(function () {
        Route::controller(RegisteredUserController::class)->group(function () {
            Route::get('/admin/register', 'create')->name('admin.register.create');
            Route::post('/admin/register', 'store')->name('admin.register.store');
        });
    });
});