<?php

use Illuminate\Support\Facades\Route;
Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/Formulario', function () {
    return view('Formulario');
})->name('formulario');

Route::post('/recibeFormulario', function (Request $request) {
    return $request->all();
});

Route::post ('recibeFormulario',function (Request $request){
    $infoPersonal = new InformacionPersonal();
    $infoPersonal->nombre = $request->nombre;
    $infoPersonal->correo = $request->correo;
    $infoPersonal->fecha_nacimiento = $request->fecha_nacimiento;
    $infoPersonal->save();
    
});