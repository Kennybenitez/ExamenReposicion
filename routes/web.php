<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/productos', [ProductoController::class, 'todosProductos'])->name('producto.inicio');

Route::get('/productos/ver', [ProductoController::class, 'crearProduc'])->name('producto.ver');

Route::post('/productos/crear', [ProductoController::class, 'crearProducto'])->name('producto.crear');



Route::get('/proveedores', [ProveedorController::class, 'todosProveedores'])->name('proveedor.inicio');

Route::get('/proveedores/ver', [ProveedorController::class, 'crearProve'])->name('proveedor.ver');

Route::post('/proveedores/crear', [ProveedorController::class, 'crearProveedores'])->name('proveedor.crear');




Route::get('/empleados', [EmpleadoController::class, 'todosEmpleados'])->name('empleado.inicio');

Route::get('/empleados/ver', [EmpleadoController::class, 'crearEmple'])->name('empleado.ver');

Route::post('/empleados/crear', [EmpleadoController::class, 'crearEmpleado'])->name('empleado.crear');