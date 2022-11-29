<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despachos;

class DespachosController extends Controller
{
    //
    public function index()
    {
        $Despacho = Despachos::all();
        return $Despacho;
    }
    public function getSelect()
    {
        $Despacho = Despachos::select('id','nombre')->get();
        return $Despacho;
    }

    public function store(Request $request)
    {
        // Validate the request...
 
        $Despacho = new Despachos;
 
        $Despacho->responsable= $request->responsable;
        $Despacho->fecha_salida= $request->fecha_salida;
        $Despacho->cantidad= $request->cantidad;
        $Despacho->id_ingreso= $request->idIngreso;
        $Despacho->id_producto= $request->idProducto;
        
 
        $Despacho->save();
    }

    public function update(Request $request)
    {
         
        $Despacho = Despachos::find($request->id);
 
        $Despacho->responsable= $request->responsable;
        $Despacho->fecha_salida= $request->fecha_salida;
        $Despacho->cantidad= $request->cantidad;
 
        $Despacho->save();
    }

    public function destroy(Request $request)
    {
     
        $Despacho = Despachos::find($request->id);
        $Despacho->delete();
    }
}
