<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function todosEmpleados(){
        $empleados = Empleado::all();
        return view('empleado', compact('empleados'));
    }

    public function crearEmple(){
        return view('crearEmpleado');
    }

    public function crearEmpleado(Request $request){
        $newEmpleado = new Empleado();
        $newEmpleado->IdPrestamo = $request->input('IdPrestamo');
        $newEmpleado->nombre = $request->input('nombre');
        $newEmpleado->apellido = $request->input('apellido');
        $newEmpleado->fechaIngreso  = $request->input('fechaIngreso');
        $newEmpleado->salario  = $request->input('salario');
        
        $newEmpleado->save();
        
        return redirect()->route('empleado.inicio');
    }
}
