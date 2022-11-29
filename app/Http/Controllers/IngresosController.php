<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ingresos;

class IngresosController extends Controller
{
    //
    public function index()
    {
        $ingreso = Ingresos::all();
        return $ingreso;
    }
    public function getSelect()
    {
        $ingreso = Ingresos::select('id','nombre')->get();
        return $ingreso;
    }

    public function store(Request $request)
    {
        // Validate the request...
 
        $ingreso= new Ingresos;
 
        $ingreso->responsable= $request->responsable;
        $ingreso->provedor= $request->provedor;
        $ingreso->fecha_ingreso= $request->fecha_ingreso;
        $ingreso->cantidad= $request->cantidad;
        $ingreso->id_producto= $request->idProducto;
        
        
    
        $persona->save();
    }

    public function update(Request $request)
    {
         
        $ingreso = ingresos::find($request->id);
 
        $ingreso->responsable= $request->responsable;
        $ingreso->provedor= $request->provedor;
        $ingreso->fecha_ingreso= $request->fecha_ingreso;
        $ingreso->cantidad= $request->cantidad;
 
        $ingreso->save();
    }

    public function destroy(Request $request)
    {
     
        $ingreso = ingresos::find($request->id);
        $ingreso->delete();
    }
}
