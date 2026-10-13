<?php

use App\Http\Controllers\InformacionPersonalController;
use Illuminate\Support\Facades\Route;

// La raiz del sitio lleva directo a la lista de registros
Route::redirect('/', '/informacion-personal');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

// Formulario, registros, detalle, editar, actualizar y eliminar informacion personal
Route::resource('informacion-personal', InformacionPersonalController::class);
