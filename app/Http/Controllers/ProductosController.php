<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    //
    public function product(Request $request)
    {
        // Validate the request...
 
        $producto = new productos;
 
        $persona->clasificasion= $request->clasificasion;
        $persona->codigo= $request->codigo;
        $persona->descripcion= $request->descripcion;
        $persona->precio= $request->precio;
        
 
        $producto->save();
    }
}
