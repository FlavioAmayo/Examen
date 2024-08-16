<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ClienteController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');
Route::get('/proyectos', [ProyectosController::class, 'index'])->name('proyectos');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');

// Rutas para clientes (CRUD)
Route::resource('clientes', ClienteController::class);
