<?php

namespace App\Http\Controllers;

use App\Models\InformacionPersonal;
use Illuminate\Http\Request;

class InformacionPersonalController extends Controller
{
    /**
     * Muestra todos los registros guardados.
     */
    public function index()
    {
        $registros = InformacionPersonal::latest()->get();

        return view('registros', compact('registros'));
    }

    /**
     * Muestra el formulario.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Valida los datos del formulario y los guarda en la base de datos.
     */
    public function store(Request $request)
    {
        InformacionPersonal::create($this->validar($request));

        return redirect()->route('informacion-personal.create')->with('exito', '¡Datos guardados correctamente!');
    }

    /**
     * Muestra el detalle de un registro.
     */
    public function show(InformacionPersonal $informacionPersonal)
    {
        return view('detalle', ['registro' => $informacionPersonal]);
    }

    /**
     * Muestra el formulario para editar un registro.
     */
    public function edit(InformacionPersonal $informacionPersonal)
    {
        return view('formulario', ['registro' => $informacionPersonal]);
    }

    /**
     * Valida los datos y actualiza el registro.
     */
    public function update(Request $request, InformacionPersonal $informacionPersonal)
    {
        $informacionPersonal->update($this->validar($request));

        return redirect()->route('informacion-personal.index')->with('exito', '¡Registro actualizado correctamente!');
    }

    /**
     * Elimina un registro.
     */
    public function destroy(InformacionPersonal $informacionPersonal)
    {
        $informacionPersonal->delete();

        return redirect()->route('informacion-personal.index')->with('exito', '¡Registro eliminado correctamente!');
    }

    /**
     * Reglas de validación compartidas por store y update.
     */
    private function validar(Request $request): array
    {
        return $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'fecha_nacimiento' => 'required|date',
        ]);
    }
}
