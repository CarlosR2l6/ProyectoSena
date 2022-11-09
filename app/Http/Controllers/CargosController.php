<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cargos;

class CargosController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the request...
 
        $cargo = new cargos;
 
        $cargo->nombre= $request->nombre;
        $cargo->descripcion= $request->descripcion;
 
        $cargo->save();
    }
}
