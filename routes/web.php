<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PqrsController;

Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/menu', [PaginaController::class, 'menu'])->name('menu');
Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');

Route::post('/pqrs', [PqrsController::class, 'store'])->name('pqrs.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/mensajes', [PqrsController::class, 'index'])->name('mensajes');
    Route::get('/mensajes/{id}/editar', [PqrsController::class, 'edit'])->name('mensajes.edit');
    Route::put('/mensajes/{id}', [PqrsController::class, 'update'])->name('mensajes.update');
    Route::delete('/mensajes/{id}', [PqrsController::class, 'destroy'])->name('mensajes.destroy');
});

require __DIR__.'/auth.php';