<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identificacion;

class IdentificacionController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'facultad' => 'required|string|max:255',
            'programa' => 'required|string|max:255',
            'nombre_del_curso' => 'required|string|max:255',
            'elaborado_por' => 'required|string|max:255',
            'fecha_ultima_actualizacion' => 'required|date',
            'fecha_aprobacion_comite_curricular' => 'required|date',
            'idioma' => 'required|string|max:255',
            'codigo' => 'required|string|max:255',
        ]);

        // Crear un nuevo registro en la base de datos
        Identificacion::create([
            'facultad' => $request->input('facultad'),
            'programa' => $request->input('programa'),
            'nombre_del_curso' => $request->input('nombre_del_curso'),
            'elaborado_por' => $request->input('elaborado_por'),
            'fecha_ultima_actualizacion' => $request->input('fecha_ultima_actualizacion'),
            'fecha_aprobacion_comite_curricular' => $request->input('fecha_aprobacion_comite_curricular'),
            'idioma' => $request->input('idioma'),
            'codigo' => $request->input('codigo'),
        ]);

        return response()->json(['success' => true]);
    }

    public function index(){
        // Obtener todos los registros
        $identificaciones = Identificacion::all();

        // Devolver los registros como JSON
        return response()->json($identificaciones);
    }

}
