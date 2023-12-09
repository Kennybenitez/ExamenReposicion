<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function todosProductos(){
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function crearProduc(){
        return view('crearProductos');
    }

    public function crearProducto(Request $request){
        $newProducto = new Producto();
        $newProducto->Id = $request->input('id');
        $newProducto->descripcion = $request->input('descripcion');
        $newProducto->precio = $request->input('precio');
        $newProducto->stock = $request->input('stock');
        $newProducto->pagaIsv  = $request->input('pagaIsv');
       
        
        $newProducto->save();
        
        return redirect()->route('producto.inicio');
    }
}
