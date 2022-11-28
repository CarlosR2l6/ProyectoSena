<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\ingresos;

class IngresosController extends Controller
{
    //
    public function ingreso(Request $request)
    {
        // Validate the request...
 
        $ingreso= new ingresos;
 
        $ingreso->responsable= $request->responsable;
        $ingreso->provedor= $request->provedor;
        $ingreso->fecha_ingreso= $request->fecha_ingreso;
        $ingreso->cantidad= $request->cantidad;
        
        
        
 
        $persona->guardar();
    }
}
