<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despachos;

class DespachosController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the request...
 
        $Despacho = new Despachos;
 
        $Despacho->responsable= $request->responsable;
        $Despacho->fecha_salida= $request->fecha_salida;
        $Despacho->cantidad= $request->cantidad;
        
 
        $cargo->save();
    }
}
