<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PqrsController;

Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/menu', [PaginaController::class, 'menu'])->name('menu');
Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');
Route::get('/mensajes', [PqrsController::class, 'index'])->name('mensajes');
Route::post('/pqrs', [PqrsController::class, 'store'])->name('pqrs.store');






// Route::get('/mensajes', [PqrsController::class, 'index'])->name('mensajes');