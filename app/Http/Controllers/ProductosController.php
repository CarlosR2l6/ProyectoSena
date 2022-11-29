<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    //
    public function index()
    {
        $producto = Productos::all();
        return $producto;
    }
    public function store(Request $request)
    {
        // Validate the request...
 
        $producto = new productos;
 
        $producto->clasificasion= $request->clasificasion;
        $producto->codigo= $request->codigo;
        $producto->descripcion= $request->descripcion;
        $producto->precio= $request->precio;
        
 
        $producto->save();
    }
    public function update(Request $request)
    {
         
        $producto = productos::find($request->id);
 
        $producto->clasificasion= $request->clasificasion;
        $producto->codigo= $request->codigo;
        $producto->descripcion= $request->descripcion;
        $producto->precio= $request->precio;
 
        $producto->save();
    }

    public function destroy(Request $request)
    {
     
        $producto =productos::find($request->id);
        $producto->delete();
    }
}
