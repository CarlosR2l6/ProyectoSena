<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ubicaciones;

class UbicacionesController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the request...
 
        $Ubicacion = new Ubicaciones;
 
        $Ubicacion->area= $request->area;
        $Ubicacion->ubicacion= $request->ubicacion;
        $Ubicacion->fecha_movimiento= $request->fecha_movimiento;
        $Ubicacion->cantidad= $request->cantidad;
        
 
        $Ubicacion->save();
    }
}
