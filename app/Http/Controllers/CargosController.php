<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cargos;

class CargosController extends Controller
{
    //
    public function index()
    {
        $cargos = Cargos::all();
        return $cargos;
    }

    public function store(Request $request)
    {
        // Validate the request...
 
        $cargo = new Cargos;
 
        $cargo->nombre= $request->nombre;
        $cargo->descripcion= $request->descripcion;
 
        $cargo->save();
    }

    public function update(Request $request)
    {
         
        $cargo = cargos::find($request->id);
 
        $cargo->nombre= $request->nombre;
        $cargo->descripcion= $request->descripcion;
 
        $cargo->save();
    }

    public function destroy(Request $request)
    {
     
        $cargo = cargos::find($request->id);
        $cargo->delete();
    }
}

