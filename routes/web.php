<?php

use App\Http\Controllers\InformacionPersonalController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
})->name('home');

// Formulario, registros, detalle, editar, actualizar y eliminar informacion personal
Route::resource('informacion-personal', InformacionPersonalController::class);
