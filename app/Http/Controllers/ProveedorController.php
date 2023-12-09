<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;

class ProveedorController extends Controller
{
    public function todosProveedores(){
        $proveedores = Proveedores::all();
        return view('proveedor', compact('proveedores'));
    }

    public function crearProve(){
        return view('crearProveedor');
    }

    public function crearProveedores(Request $request){
        $newProveedor = new Proveedores();
        $newProveedor->IdProveedor = $request->input('IdProveedor');
        $newProveedor->nombre = $request->input('nombre');
        $newProveedor->fechaRegistro  = $request->input('fechaRegistro');
        $newProveedor->telefono = $request->input('telefono');
        $newProveedor->correo  = $request->input('correo');
        
        $newProveedor->save();
        
        return redirect()->route('proveedor.inicio');
    }
}
