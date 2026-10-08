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
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'fecha_nacimiento' => 'required|date',
        ]);

        InformacionPersonal::create($datos);

        return redirect()->route('formulario')->with('exito', '¡Datos guardados correctamente!');
    }
}
